<?php

namespace Database\Seeders;

use App\Models\school;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $schools = [
        //     [
        //         'name' => 'Real Estate Licensing',
        //         'slug' => Str::slug('Real Estate Licensing'),
        //     ],
        //     [
        //         'name' => 'Insurance Licensing',
        //         'slug' => Str::slug('Insurance Licensing'),
        //     ],
        //     [
        //         'name' => 'Nursing and Allied Health Certifications',
        //         'slug' => Str::slug('Nursing and Allied Health Certifications'),
        //     ],
        //     [
        //         'name' => 'Teacher Licensure and Education Exams',
        //         'slug' => Str::slug('Teacher Licensure and Education Exams'),
        //     ],
        //     [
        //         'name' => 'Project Management and Human Resources',
        //         'slug' => Str::slug('Project Management and Human Resources'),
        //     ],
        //     [
        //         'name' => 'IT and Cybersecurity Certifications',
        //         'slug' => Str::slug('IT and Cybersecurity Certifications'),
        //     ],
        // ];

        // foreach ($schools as $school) {
        //     DB::table('schools')->updateOrInsert(
        //         ['name' => $school['name']],           // Condition to find existing record
        //         [
        //             'name'       => $school['name'],
        //             'slug'       => $school['slug'],
        //             'updated_at' => now(),                 // Optional: update timestamp
        //         ]
        //     );
        // }

        // $this->command->info('Schools table seeded successfully with ' . count($schools) . ' records!');
    }
}