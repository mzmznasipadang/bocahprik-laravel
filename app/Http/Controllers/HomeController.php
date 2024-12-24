<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data untuk ditampilkan di halaman home
        $data = [
            'welcomeMessage' => 'Selamat datang di Web BocilPrik!',
            'features' => [
                'Kelola kursus',
                'Pantau progress belajar',
                'Ikuti kuis untuk menguji kemampuan',
            ],
        ];

        return view('home', $data);
    }

    public function about_us()
    {
        $data = [
            'welcomeMessage' => 'Selamat datang di about BocilPrik!',
            'features' => [
                'Kelola kursus',
                'Pantau progress belajar',
                'Ikuti kuis untuk menguji kemampuan',
            ],
        ];

        return view('about', $data);
    }
}
