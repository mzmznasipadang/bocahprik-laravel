<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Halaman utama dashboard
    public function index()
    {
        return view('admin.dashboard');
    }

    // Tampilkan daftar kursus
    // Tampilkan daftar kursus
public function list_course()
{
    $courses = Course::where('created_by', Auth::id())->get();
    return view('admin.list-course', compact('courses'));
}


    // Form tambah kursus
    public function create_course()
    {
        return view('admin.create-course');
    }

    // Simpan kursus baru
    public function store_course(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'thumbnail_url' => $path,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('admin.list_course')->with('success', 'Course created successfully.');
    }

    // Form edit kursus
    public function edit_course(Course $course)
    {
        return view('admin.edit-course', compact('course'));
    }

    // Update kursus
    public function update_course(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($course->thumbnail_url) {
                Storage::disk('public')->delete($course->thumbnail_url);
            }

            $course->thumbnail_url = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $course->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.list_course')->with('success', 'Course updated successfully.');
    }

    public function list_sections(Course $course)
{
    $sections = $course->sections()->orderBy('order_number')->get();
    return view('admin.list-sections', compact('course', 'sections'));
}

public function create_section(Course $course)
{
    return view('admin.create-section', compact('course'));
}

public function store_section(Request $request, Course $course)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'order_number' => 'required|integer|min:1',
    ]);

    $course->sections()->create($request->all());

    return redirect()->route('admin.list_sections', $course)->with('success', 'Section created successfully.');
}

public function edit_section(Section $section)
{
    return view('admin.edit-section', compact('section'));
}

public function update_section(Request $request, Section $section)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'order_number' => 'required|integer|min:1',
    ]);

    $section->update($request->all());

    return redirect()->route('admin.list_sections', $section->course_id)->with('success', 'Section updated successfully.');
}

public function delete_section(Section $section)
{
    $courseId = $section->course_id;
    $section->delete();

    return redirect()->route('admin.list_sections', $courseId)->with('success', 'Section deleted successfully.');
}


    // Hapus kursus
    public function delete_course(Course $course)
    {
        if ($course->thumbnail_url) {
            Storage::disk('public')->delete($course->thumbnail_url);
        }

        $course->delete();

        return redirect()->route('admin.list_course')->with('success', 'Course deleted successfully.');
    }
}
