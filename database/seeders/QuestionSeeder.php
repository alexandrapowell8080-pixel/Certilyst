<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        //DB::table('questions')->truncate();
        $paths=[
            'seeders/data/business.csv',
            'seeders/data/estate.csv',
           / // 'seeders/data/insurance.csv',
            // 'seeders/data/it.csv',
            // 'seeders/data/medical.csv',
            // 'seeders/data/pmp.csv',
            // 'seeders/data/praxis.csv',
            // 'seeders/data/school_hierarchy.csv',
        ];
        foreach ($paths as $key => $path) {
             $csvPath = database_path($path);

             if (!file_exists($csvPath)) {
            $this->command->error("❌ CSV file not found at: {$csvPath}");
            $this->command->info("Make sure the file is named 'questions.csv' and is in your Downloads folder.");
            return;
        }
            $this->examseeder($csvPath);
            # code...
        }
       //$csvPath = 'C:/Users/' . get_current_user() . '/Downloads/it.csv';
       
        //$csvPath = database_path('seeders/data/praxis.csv'); 

        $this->command->info("📝 Check storage/logs/laravel.log for detailed skipped exams and errors.");
    }
    private function examseeder(string $csvPath){
          $handle = fopen($csvPath, 'r');
        fgetcsv($handle); // Skip header

        $count = 0;
        $skipped = 0;
        $failed = 0;

        $this->command->info("📂 Starting question seeding from: " . basename($csvPath));

        while (($row = fgetcsv($handle)) !== false) {
            try {
                if (count($row) < 12 || empty(trim($row[0] ?? ''))) {
                    $skipped++;
                    continue;
                }

                $examName       = trim($row[0] ?? '');
                $extract        = trim($row[1] ?? '');
                $questionText   = trim($row[2] ?? '');
                $choiceA        = trim($row[3] ?? '');
                $choiceB        = trim($row[4] ?? '');
                $choiceC        = trim($row[5] ?? '');
                $choiceD        = trim($row[6] ?? '');
                $choiceE        = trim($row[7] ?? '');
                $choiceF        = trim($row[8] ?? '');
                $choiceG        = trim($row[9] ?? '');
                $correctAnswer  = strtoupper(trim($row[10] ?? ''));
                $rationale      = trim($row[11] ?? '');
                $image          = trim($row[12] ?? '');
                $questionType   = trim($row[13] ?? 'Regular');

                if (empty($examName) || empty($questionText)) {
                    $skipped++;
                    continue;
                }

                // Find Exam
                $exam = Exam::where('name', $examName)->first();

                if (!$exam) {
                    // Log skipped exam name to storage log
                    Log::warning("Question Seeder - Exam not found", [
                        'exam_name' => $examName,
                        'row_number' => ($count + $skipped + $failed + 2),
                        'question_preview' => substr($questionText, 0, 100) . '...'
                    ]);

                    $this->command->warn("⚠️ Row " . ($count + $skipped + $failed + 2) . ": Exam not found → '{$examName}'");
                    $skipped++;
                    continue;
                }

                // Generate URL
                $questionSlug = Str::slug($questionText, '-');
                $shortSlug    = substr($questionSlug, 0, 60);
                $randomCode   = rand(10000000, 99999999);
                $url          = '/question/' . $shortSlug . '-' . $randomCode;

                // Create the question
                Question::create([
                    'exam_id'        => $exam->id,
                    'extract'        => $extract,
                    'question'       => $questionText,
                    'choiceA'        => $choiceA,
                    'choiceB'        => $choiceB,
                    'choiceC'        => $choiceC,
                    'choiceD'        => $choiceD,
                    'choiceE'        => $choiceE,
                    'choiceF'        => $choiceF,
                    'choiceG'        => $choiceG,
                    'correct_answer' => $correctAnswer,
                    'rationale'      => $rationale,
                    'question_type'  => $questionType,
                    'image'          => $image,
                    'url'            => $url,
                ]);

                $count++;

                if ($count % 100 === 0) {
                    $this->command->info("   → {$count} questions seeded so far...");
                }

            } catch (\Exception $e) {
                $failed++;
                $rowPreview = implode(' | ', array_map('trim', array_slice($row, 0, 5)));

                Log::error("Question Seeder - Failed to insert question", [
                    'row_number' => ($count + $skipped + $failed + 1),
                    'error'      => $e->getMessage(),
                    'exam_name'  => $examName ?? 'N/A',
                    'question'   => substr($questionText ?? '', 0, 150) . '...',
                    'row_data'   => $rowPreview
                ]);

                $this->command->error("❌ Failed at row " . ($count + $skipped + $failed + 1) . ": check the log file with reference row" . ($count + $skipped + $failed + 1));
                logger("❌ Failed at row " . ($count + $skipped + $failed + 1));
                $this->command->warn("   Preview: " . substr($rowPreview, 0, 120) . "...");
            }
        }

        fclose($handle);
         // Final Summary
        $this->command->info("\n🎉 Question seeding completed for ". basename($csvPath));
        $this->command->info("   ✅ Successfully inserted : {$count} questions");
        $this->command->warn("   ⚠️  Skipped               : {$skipped} rows");
        if ($failed > 0) {
            $this->command->error("   ❌ Failed                : {$failed} rows");
        }

    }
}