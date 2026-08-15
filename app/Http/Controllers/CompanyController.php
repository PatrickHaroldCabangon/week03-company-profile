<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function home()
    {
        $featuredServices = [
            [
                'title' => 'Web Development',
                'description' => 'Custom, responsive websites built with modern frameworks.',
                'icon' => '💻',
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'User-centered designs that are both functional and beautiful.',
                'icon' => '🎨',
            ],
            [
                'title' => 'Cloud Solutions',
                'description' => 'Scalable cloud infrastructure tailored to your business needs.',
                'icon' => '☁️',
            ],
        ];

        return view('pages.home', compact('featuredServices'));
    }

    public function about()
    {
        $coreValues = [
            'Integrity' => 'We do what is right, even when no one is watching.',
            'Innovation' => 'We continuously explore better ways to solve problems.',
            'Excellence' => 'We hold our work to the highest professional standard.',
            'Collaboration' => 'We believe great products are built by great teams.',
        ];

        $team = [
            ['name' => 'Patrick Harold M. Cabangon', 'role' => 'Founder & CEO'],
            ['name' => 'Francis Jane Olvido', 'role' => 'Lead Developer'],
            ['name' => 'Yesel Ann Alegre', 'role' => 'UI/UX Designer'],
            ['name' => 'N/A', 'role' => 'Project Manager'],
        ];

        return view('pages.about', compact('coreValues', 'team'));
    }

    public function services()
    {
        $services = [
            [
                'title' => 'Web Development',
                'icon' => '💻',
                'description' => 'We build fast, secure, and scalable websites and web applications using modern frameworks like Laravel.',
            ],
            [
                'title' => 'Mobile Development',
                'icon' => '📱',
                'description' => 'Native and cross-platform mobile apps designed for performance and usability.',
            ],
            [
                'title' => 'UI/UX Design',
                'icon' => '🎨',
                'description' => 'Human-centered interface design that improves engagement and user satisfaction.',
            ],
            [
                'title' => 'Cloud Solutions',
                'icon' => '☁️',
                'description' => 'Cloud migration, hosting, and infrastructure management for scalable operations.',
            ],
            [
                'title' => 'Cybersecurity',
                'icon' => '🔒',
                'description' => 'Security audits, vulnerability testing, and protection strategies for your systems.',
            ],
            [
                'title' => 'IT Consulting',
                'icon' => '🧭',
                'description' => 'Strategic technology guidance to help businesses make smart, future-ready decisions.',
            ],
        ];

        return view('pages.services', compact('services'));
    }

    public function contact()
    {
        $companyInfo = [
            'address' => 'Batong Malake, Los Baños, Laguna, Philippines',
            'email' => 'Itsme@Vivatechsolutions.com',
            'phone' => '+63 963 489 5197',
        ];

        return view('pages.contact', compact('companyInfo'));
    }
}