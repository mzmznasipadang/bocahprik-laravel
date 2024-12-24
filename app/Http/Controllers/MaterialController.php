<?php

// app/Http/Controllers/MaterialController.php
// app/Http/Controllers/MaterialController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::with('section')->get();
        $sections = Section::all();
        return view('admin.materials.index', compact('materials', 'sections'));
    }

    public function create()
    {
        $sections = Section::all();
        return view('admin.materials.create', compact('sections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_id' => 'required|exists:sections,id',
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'file' => 'required|file|mimes:pdf,doc,docx,mp4,mkv,avi,jpg,png,mp3|max:10240', // Maksimal 10MB
            'duration' => 'required|integer',
            'order_number' => 'required|integer'
        ]);

        $path = $request->file('file')->store('materials');

        $materialData = $request->all();
        $materialData['content_url'] = $path;
        $materialData['type'] = $this->determineType($request->file('file'));

        Material::create($materialData);

        return redirect()->route('materials.index')->with('success', 'Material created successfully.');
    }

    public function edit(Material $material)
    {
        $sections = Section::all();
        return view('admin.materials.edit', compact('material', 'sections'));
    }

    public function update(Request $request, Material $material)
    {
        $request->validate([
            'section_id' => 'required|exists:sections,id',
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'file' => 'nullable|file|mimes:pdf,doc,docx,mp4,mkv,avi,jpg,png,mp3|max:10240', // Maksimal 10MB
            'duration' => 'required|integer',
            'order_number' => 'required|integer'
        ]);

        if ($request->hasFile('file')) {
            Storage::delete($material->content_url); // Hapus file lama
            $path = $request->file('file')->store('materials');
            $material->content_url = $path;
            $material->type = $this->determineType($request->file('file'));
        }

        $material->update($request->except('file'));

        return redirect()->route('materials.index')->with('success', 'Material updated successfully.');
    }

    public function destroy(Material $material)
    {
        Storage::delete($material->content_url); // Hapus file dari storage
        $material->delete();
        return redirect()->route('materials.index')->with('success', 'Material deleted successfully.');
    }

    private function determineType($file)
    {
        $extension = $file->getClientOriginalExtension();
        switch ($extension) {
            case 'mp4':
            case 'mkv':
            case 'avi':
                return 'video';
            case 'pdf':
            case 'doc':
            case 'docx':
                return 'document';
            case 'jpg':
            case 'png':
                return 'image';
            case 'mp3':
                return 'audio';
            default:
                return 'unknown';
        }
    }
}
