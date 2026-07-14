<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Malware Analysis and Prevention in a Virtual Environment',
                'slug' => 'malware-analysis-virtual-environment',
                'description' => 'Melakukan simulasi analisis malware dalam lingkungan virtual (sandbox) dengan fokus pada studi perilaku Trojan berbasis Meterpreter reverse HTTPS.',
                'image' => 'malware1.png',
                'image_2' => 'malware2.png',
                'tech_stack' => ['Sandbox', 'ANY.RUN', 'Kali Linux', 'msfvenom', 'VirusTotal', 'AbuseIPDB'],
                'category' => 'Malware Analysis',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'SQL Injection Exploitation & Web Application Security Testing',
                'slug' => 'sql-injection-exploitation-web-security-testing',
                'description' => 'A hands-on web security project focused on identifying and exploiting SQL Injection (SQLi) vulnerabilities in a login-based web application.',
                'image' => 'sql1.png',
                'image_2' => 'sql2.png',
                'tech_stack' => ['MAMP', 'MySQL', 'phpMyAdmin', 'Burp Suite', 'sqlmap', 'Kali Linux'],
                'category' => 'Web Security Testing',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Web Session Hijacking & Man-in-the-Middle (MITM) Attack Simulation',
                'slug' => 'web-session-hijacking-mitm-simulation',
                'description' => 'A practical network security project demonstrating Man-in-the-Middle (MITM) attacks through ARP spoofing techniques in a controlled lab environment.',
                'image' => 'session1.png',
                'image_2' => 'session2.png',
                'tech_stack' => ['Kali Linux', 'Ettercap', 'Wireshark', 'ARP Spoofing', 'HTTP Network Analysis'],
                'category' => 'Network Security',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Hotel Management System Admin Dashboard',
                'slug' => 'hotel-management-system-admin-dashboard',
                'description' => 'A modern web-based hotel management admin dashboard designed to handle core operational workflows such as room management, booking monitoring, and revenue reporting.',
                'image' => 'hotel1.png',
                'image_2' => 'hotel2.png',
                'tech_stack' => ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'PHP', 'MySQL'],
                'category' => 'Web Development',
                'is_featured' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}