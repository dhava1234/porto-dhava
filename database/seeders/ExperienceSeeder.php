<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $experiences = [
            [
                'position' => 'Senior Web Developer & Security Consultant',
                'company' => 'Freelance',
                'location' => 'Remote',
                'start_date' => '2022-01-01',
                'is_current' => true,
                'description' => 'Providing full-stack web development and cybersecurity consulting services for various clients. Specializing in Laravel development, security audits, and penetration testing.',
                'sort_order' => 1,
            ],
            [
                'position' => 'Full Stack Developer',
                'company' => 'Tech Company',
                'location' => 'Jakarta, Indonesia',
                'start_date' => '2020-06-01',
                'end_date' => '2021-12-31',
                'is_current' => false,
                'description' => 'Developed and maintained multiple web applications using Laravel and Vue.js. Implemented security best practices and conducted regular security audits.',
                'sort_order' => 2,
            ],
            [
                'position' => 'Junior Web Developer',
                'company' => 'Startup',
                'location' => 'Bandung, Indonesia',
                'start_date' => '2019-01-01',
                'end_date' => '2020-05-31',
                'is_current' => false,
                'description' => 'Built responsive web applications and collaborated with design team to implement user interfaces. Learned security fundamentals and best practices.',
                'sort_order' => 3,
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}