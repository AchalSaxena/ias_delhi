<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@iasdelhi.org'],
            [
                'name' => 'IAS Delhi Admin',
                'password' => Hash::make('ChangeMe123!'),
                'role' => 'admin',
                'is_admin' => true,
            ],
        );

        $courses = [
            [
                'name' => 'MEDICAL SCIENCE OPTIONAL TEST SERIES',
                'description' => 'Comprehensive test series program for Medical Science optional. Features detailed feedback, model answers, and personally tailored mentoring.',
                'category' => 'Medical Science',
                'instructor' => 'Dr. Adesh Sir',
                'price' => 12500.00,
                'thumbnail_url' => 'Medical-Science.jpg',
                'duration_hours' => 120,
                'level' => 'Intermediate',
            ],
            [
                'name' => 'DAILY ANSWER WRITING- MEDICAL SCIENCE',
                'description' => 'Daily practice questions and evaluation for Medical Science optional. Cultivate answer-writing habits with feedback within 24-48 hours.',
                'category' => 'Medical Science',
                'instructor' => 'Dr. Adesh Sir & team',
                'price' => 8500.00,
                'thumbnail_url' => 'doctor-1.webp',
                'duration_hours' => 90,
                'level' => 'Beginner',
            ],
            [
                'name' => 'MEDICAL SCIENCE STUDY MATERIAL',
                'description' => 'High-quality, meticulously curated study material and notes covering the complete syllabus for Medical Science optional.',
                'category' => 'Medical Science',
                'instructor' => 'IAS Delhi Faculty',
                'price' => 15000.00,
                'thumbnail_url' => '1111111111.jpg',
                'duration_hours' => 150,
                'level' => 'Advanced',
            ],
            [
                'name' => 'GS REVISION & DAILY ANSWER WRITING',
                'description' => 'GS Revision and Daily Answer Writing program. Build strong foundation for GS Papers I, II, III and IV with structured daily practice.',
                'category' => 'General Studies',
                'instructor' => 'Gajanan Sir & team',
                'price' => 9500.00,
                'thumbnail_url' => 'GS-Revision-Mentorship-Program-1.jpg',
                'duration_hours' => 100,
                'level' => 'Intermediate',
            ],
            [
                'name' => 'SOCIOLOGY OPTIONAL PROGRAMS',
                'description' => 'Complete Sociology optional programs. Under guidance of Praveen Kishore, build deep conceptual clarity and excellent answer-writing skills.',
                'category' => 'Sociology',
                'instructor' => 'Praveen Kishore',
                'price' => 14000.00,
                'thumbnail_url' => 'Sociology-optional-by-Praveen-Kishore.png',
                'duration_hours' => 140,
                'level' => 'Intermediate',
            ],
            [
                'name' => 'PUBLIC ADMINISTRATION PROGRAMS',
                'description' => 'Comprehensive Public Administration optional programs. In-depth coverage of theory and practice under guidance of Aditya Sir.',
                'category' => 'Public Administration',
                'instructor' => 'Aditya Sir',
                'price' => 13500.00,
                'thumbnail_url' => 'Aditya-sir.png',
                'duration_hours' => 130,
                'level' => 'Intermediate',
            ],
            [
                'name' => 'ANTHROPOLOGY OPTIONAL PROGRAMS',
                'description' => 'Thorough coverage of Anthropology optional syllabus. Integrated test series, case studies, and personalized evaluation.',
                'category' => 'Anthropology',
                'instructor' => 'Anthropology Expert Faculty',
                'price' => 14500.00,
                'thumbnail_url' => 'Anthropology-optional-program.jpg',
                'duration_hours' => 135,
                'level' => 'Intermediate',
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(
                ['name' => $course['name']],
                $course
            );
        }
    }
}
