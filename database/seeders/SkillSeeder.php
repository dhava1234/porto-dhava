<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Frontend
            ['name' => 'HTML/CSS', 'category' => 'frontend', 'level' => 95, 'sort_order' => 1],
            ['name' => 'JavaScript', 'category' => 'frontend', 'level' => 90, 'sort_order' => 2],
            ['name' => 'React', 'category' => 'frontend', 'level' => 85, 'sort_order' => 3],
            ['name' => 'Vue.js', 'category' => 'frontend', 'level' => 88, 'sort_order' => 4],
            ['name' => 'Tailwind CSS', 'category' => 'frontend', 'level' => 92, 'sort_order' => 5],
            
            // Backend
            ['name' => 'PHP', 'category' => 'backend', 'level' => 93, 'sort_order' => 6],
            ['name' => 'Laravel', 'category' => 'backend', 'level' => 95, 'sort_order' => 7],
            ['name' => 'Node.js', 'category' => 'backend', 'level' => 80, 'sort_order' => 8],
            ['name' => 'MySQL', 'category' => 'backend', 'level' => 90, 'sort_order' => 9],
            ['name' => 'PostgreSQL', 'category' => 'backend', 'level' => 85, 'sort_order' => 10],
            
            // Cybersecurity
            ['name' => 'Penetration Testing', 'category' => 'cybersecurity', 'level' => 90, 'sort_order' => 11],
            ['name' => 'Vulnerability Assessment', 'category' => 'cybersecurity', 'level' => 88, 'sort_order' => 12],
            ['name' => 'OWASP Top 10', 'category' => 'cybersecurity', 'level' => 95, 'sort_order' => 13],
            ['name' => 'Burp Suite', 'category' => 'cybersecurity', 'level' => 90, 'sort_order' => 14],
            ['name' => 'Network Security', 'category' => 'cybersecurity', 'level' => 85, 'sort_order' => 15],
            
            // Tools
            ['name' => 'Git', 'category' => 'tools', 'level' => 92, 'sort_order' => 16],
            ['name' => 'Docker', 'category' => 'tools', 'level' => 85, 'sort_order' => 17],
            ['name' => 'Linux', 'category' => 'tools', 'level' => 88, 'sort_order' => 18],
            ['name' => 'AWS', 'category' => 'tools', 'level' => 80, 'sort_order' => 19],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}