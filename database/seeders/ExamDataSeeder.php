<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\School;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Exam;
use Illuminate\Concurrency\ConcurrencyServiceProvider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExamDataSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks temporarily for faster seeding
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $csvPath = database_path('seeders/data/exam_details_2026-04-15_06-10-25.csv');

        if (!file_exists($csvPath)) {
            $this->command->error("CSV file not found at: {$csvPath}");
            return;
        }

        $handle = fopen($csvPath, 'r');
        $header = fgetcsv($handle); // Skip header

        $count = 0;

        while (($row = fgetcsv($handle)) !== false) {
            if (count($row) < 4) continue;

            $schoolName   = trim($row[0]);
            $courseName   = trim($row[1]);
            $subjectName  = trim($row[2]);
            $examName     = trim($row[3]);

            if (empty($schoolName) || empty($courseName) || empty($subjectName) || empty($examName)) {
                continue;
            }

            // 1. Get or Create School
            $school = school::firstOrCreate(
                ['name' => $schoolName],
                ['slug' => Str::slug($schoolName)]
            );

            // 2. Get or Create Course
            $course = course::firstOrCreate(
                [
                    'school_id' => $school->id,
                    'name'      => $courseName,
                ],
                ['slug' => Str::slug($courseName)]
            );

            // 3. Get or Create Subject
            $subject = Subject::firstOrCreate(
                [
                    'course_id' => $course->id,
                    'name'      => $subjectName,
                ],
                ['slug' => Str::slug($subjectName)]
            );

            // 4. Get or Create Exam
            Exam::firstOrCreate(
                [
                    'subject_id' => $subject->id,
                    'name'       => $examName,
                ],
                ['slug' => Str::slug($examName)]
            );

            $count++;
        }

        fclose($handle);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->command->info("✅ Successfully seeded {$count} exams with their courses, subjects, and schools!");
    }
}