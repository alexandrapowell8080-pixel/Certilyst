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
        // Truncate Table safely
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Flashcard::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 1. Teaching Cards (Subjects 1-18)
        $teachingCards = [
            ['q' => "What is Pedagogy?", 'h' => "The art of teaching.", 'a' => "The method and practice of teaching, especially as an academic subject or theoretical concept."],
            ['q' => "Define Formative Assessment.", 'h' => "Ongoing evaluation.", 'a' => "Assessments conducted by teachers during the learning process in order to modify teaching and learning activities."],
            ['q' => "What is Summative Assessment?", 'h' => "End of unit evaluation.", 'a' => "The assessment of participants where the focus is on the outcome of a program."],
            ['q' => "Explain Scaffolding in education.", 'h' => "Temporary support structure.", 'a' => "A teaching method that provides successive levels of temporary support to help students reach higher levels of comprehension."],
            ['q' => "What is Differentiated Instruction?", 'h' => "Tailoring to student needs.", 'a' => "The practice of adapting teaching materials, content, and methods to accommodate different learning styles."]
        ];

        // 2. Real Estate Cards (Subjects 19-31)
        $realEstateCards = [
            ['q' => "What is the SAFE Act?", 'h' => "Focus on residential mortgages.", 'a' => "A federal law establishing minimum standards for licensing and registering mortgage loan originators."],
            ['q' => "Define Fiduciary Duty.", 'h' => "Think about legal trust.", 'a' => "The legal obligation of an agent to act in the best interests of their client, including loyalty, confidentiality, and full disclosure."],
            ['q' => "What is a Dual Agency?", 'h' => "Representing both sides.", 'a' => "A situation where a real estate broker represents both the buyer and the seller in the same transaction."],
            ['q' => "Explain the concept of 'Escrow'.", 'h' => "Third-party holding.", 'a' => "A financial arrangement where a neutral third party holds and regulates payment of the funds required for two parties."],
            ['q' => "What is an Appraisal?", 'h' => "Determining market value.", 'a' => "A professional estimate of a property's market value, based on recent sales of similar properties, condition, and location."]
        ];

        // 3. Medical & Nursing Cards (Subjects 32-40)
        $medicalCards = [
            ['q' => "What is Tachycardia?", 'h' => "Heart rate speed.", 'a' => "A medical condition in which the heart beats faster than normal while at rest (usually over 100 beats per minute)."],
            ['q' => "Define Hypertension.", 'h' => "Blood pressure.", 'a' => "High blood pressure, a condition in which the force of the blood against the artery walls is too high."],
            ['q' => "What is the primary function of Red Blood Cells?", 'h' => "Oxygen transport.", 'a' => "To carry oxygen from the lungs to the body tissues and carbon dioxide as a waste product, away from the tissues and back to the lungs."],
            ['q' => "What is a Phlebotomist?", 'h' => "Drawing blood.", 'a' => "A medical professional trained to draw blood from a patient for clinical or medical testing, transfusions, donations, or research."],
            ['q' => "What does CPR stand for?", 'h' => "Emergency procedure.", 'a' => "Cardiopulmonary Resuscitation, an emergency lifesaving procedure performed when the heart stops beating."]
        ];

        // 4. IT & Tech Cards (Subjects 41-45)
        $techCards = [
            ['q' => "What is Phishing?", 'h' => "Deceptive emails.", 'a' => "A cyber attack that uses disguised email as a weapon to trick the email recipient into believing that the message is something they want or need."],
            ['q' => "Define Malware.", 'h' => "Malicious software.", 'a' => "Software that is specifically designed to disrupt, damage, or gain unauthorized access to a computer system."],
            ['q' => "What does DNS stand for?", 'h' => "Internet phonebook.", 'a' => "Domain Name System. It translates human-readable domain names to machine-readable IP addresses."],
            ['q' => "What is a Firewall?", 'h' => "Network security.", 'a' => "A network security device that monitors and filters incoming and outgoing network traffic based on an organization's previously established security policies."],
            ['q' => "What is the Linux Kernel?", 'h' => "Core of the OS.", 'a' => "The core interface between a computer's hardware and its processes, communicating between the two and managing resources as efficiently as possible."]
        ];

        // 5. Finance & Insurance Cards (Subjects 46-60)
        $financeCards = [
            ['q' => "What is a Premium?", 'h' => "Monthly payment.", 'a' => "The amount of money an individual or business pays for an insurance policy."],
            ['q' => "Define Deductible.", 'h' => "Out-of-pocket cost.", 'a' => "The amount paid out of pocket by the policyholder before an insurance provider will pay any expenses."],
            ['q' => "What is Money Laundering?", 'h' => "Cleaning dirty money.", 'a' => "The illegal process of making large amounts of money generated by a criminal activity appear to have come from a legitimate source."],
            ['q' => "What is a Beneficiary?", 'h' => "Receives the payout.", 'a' => "The person or entity designated to receive the benefits of property, an estate, or a life insurance policy."],
            ['q' => "Define Amortization.", 'h' => "Paying off debt.", 'a' => "The process of spreading out a loan into a series of fixed payments over time."]
        ];

        // Fetch ALL subjects
        $subjects = Subject::all();
        $flashcardsToInsert = [];

        foreach ($subjects as $subject) {
            if ($subject->id <= 18) {
                $pool = $teachingCards;
            } elseif ($subject->id <= 31) {
                $pool = $realEstateCards;
            } elseif ($subject->id <= 40) {
                $pool = $medicalCards;
            } elseif ($subject->id <= 45) {
                $pool = $techCards;
            } else {
                $pool = $financeCards;
            }

            foreach ($pool as $card) {
                $flashcardsToInsert[] = [
                    'subject_id' => $subject->id,
                    'question'   => $card['q'],
                    'hint'       => $card['h'],
                    'answer'     => $card['a'],
                    'is_hard'    => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Bulk insert for performance
        Flashcard::insert($flashcardsToInsert);

        $this->command->info("✅ Successfully seeded 300 flashcards across all 60 subjects!");
    }
}