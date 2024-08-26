<?php

namespace Database\Seeders;
use App\Models\Job;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Software Engineer', 'Data Scientist', 'Product Manager', 'Graphic Designer',
            'Web Developer', 'UX Designer', 'Marketing Specialist', 'Sales Representative',
            'Customer Support', 'HR Manager', 'Systems Analyst', 'Database Administrator',
            'Network Engineer', 'DevOps Engineer', 'IT Support Specialist', 'Business Analyst',
            'Project Manager', 'Front-end Developer', 'Back-end Developer', 'Full Stack Developer',
            'Technical Writer', 'SEO Specialist', 'Content Strategist', 'Social Media Manager',
            'Web Designer', 'Application Developer', 'Cloud Engineer', 'Cybersecurity Analyst',
            'QA Tester', 'Software Architect', 'Game Developer', 'Mobile App Developer',
            'Embedded Systems Engineer', 'Research Scientist', 'Operations Manager',
            'Financial Analyst', 'Compliance Officer', 'Product Designer', 'Digital Marketer',
            'Sales Engineer', 'IT Consultant', 'Data Engineer', 'Site Reliability Engineer',
            'AI Engineer', 'Blockchain Developer', 'IT Project Manager', 'Technical Support Specialist',
            'Recruitment Specialist', 'Business Development Manager'
        ];

        foreach ($titles as $title) {
            Job::create([
                'title' => $title,
                'description' => 'This is a sample job description for the position of ' . $title . '.',
                'salary' => rand(50000, 120000), // Generate a random salary between 50,000 and 120,000
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        
    }
}
