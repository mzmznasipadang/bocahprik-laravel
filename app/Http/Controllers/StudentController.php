<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Course;
use App\Models\Material;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class StudentController extends Controller
{
    public function index()
    {
        return view('student.home');
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

        return view('student/about', $data);
    }
    public function courses()
    {
        // Ambil data courses
        $courses = Course::where('created_by', Auth::id())->get();
        $courses = Course::all();

        // Kirim data ke view
        return view('student.courses', compact('courses'));
     
    }
    public function show($id)
{
    $course = Course::findOrFail($id);
    $video = Material::where('section_id', function ($query) use ($id) {
        $query->select('id')
              ->from('sections')
              ->where('course_id', $id)
              ->orderBy('order_number', 'asc')
              ->limit(1);
    })->where('type', 'video')->first();

    return view('student.course_show', compact('course', 'video'));
}

public function streamVideo($filename)
{
    $filePath = "private/materials/{$filename}";

    // Cek apakah file ada
    if (!Storage::exists($filePath)) {
        abort(404, 'Video tidak ditemukan.');
    }

    // Streaming file sebagai response
    return response()->file(storage_path("app/{$filePath}"));
}


}
