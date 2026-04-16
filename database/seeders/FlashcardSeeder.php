<?php

namespace Database\Seeders;

use App\Models\Flashcard;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlashcardSeeder extends Seeder
{
    public function run(): void
    {
        // Truncate Table
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Flashcard::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Dummy Data Pool for Subjects 1-18 
        $teachingCards = [
            [
                'q' => "What is Pedagogy?",
                'h' => "The art of teaching.",
                'a' => "The method and practice of teaching, especially as an academic subject or theoretical concept."
            ],
            [
                'q' => "Define Formative Assessment.",
                'h' => "Ongoing evaluation.",
                'a' => "Assessments conducted by teachers during the learning process in order to modify teaching and learning activities to improve student attainment."
            ],
            [
                'q' => "What is Summative Assessment?",
                'h' => "End of unit evaluation.",
                'a' => "The assessment of participants where the focus is on the outcome of a program, often evaluated at the end of a course or unit."
            ],
            [
                'q' => "Explain Scaffolding in education.",
                'h' => "Temporary support structure.",
                'a' => "A teaching method that provides successive levels of temporary support to help students reach higher levels of comprehension and skill acquisition."
            ],
            [
                'q' => "What is Differentiated Instruction?",
                'h' => "Tailoring to student needs.",
                'a' => "The practice of adapting teaching materials, content, and methods to accommodate different learning styles and individual student needs."
            ]
        ];

        // Dummy Data Pool for Subjects 19-25 
        $realEstateCards = [
            [
                'q' => "What is the SAFE Act?",
                'h' => "Focus on residential mortgages.",
                'a' => "A federal law establishing minimum standards for licensing and registering mortgage loan originators."
            ],
            [
                'q' => "Define Fiduciary Duty.",
                'h' => "Think about legal trust.",
                'a' => "The legal obligation of an agent to act in the best interests of their client, including loyalty, confidentiality, and full disclosure."
            ],
            [
                'q' => "What is a Dual Agency?",
                'h' => "Representing both sides.",
                'a' => "A situation where a real estate broker represents both the buyer and the seller in the same transaction."
            ],
            [
                'q' => "Explain the concept of 'Escrow'.",
                'h' => "Third-party holding.",
                'a' => "A financial arrangement where a neutral third party holds and regulates payment of the funds required for two parties involved in a given transaction."
            ],
            [
                'q' => "What is an Appraisal?",
                'h' => "Determining market value.",
                'a' => "A professional estimate of a property's market value, based on recent sales of similar properties, condition, and location."
            ]
        ];

        // Fetch the first 25 subjects from your database
        $subjects = Subject::whereIn('id', range(1, 25))->get();
        $flashcardsToInsert = [];

        foreach ($subjects as $subject) {
            // If the subject ID is 18
            $pool = $subject->id <= 18 ? $teachingCards : $realEstateCards;

            foreach ($pool as $card) {
                $flashcardsToInsert[] = [
                    'subject_id' => $subject->id,
                    'question'   => $card['q'], 
                    'hint'       => $card['h'],
                    'answer'     => $card['a'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Bulk insert
        Flashcard::insert($flashcardsToInsert);

        $this->command->info("✅ Successfully seeded 125 flashcards with clean questions!");
    }
}