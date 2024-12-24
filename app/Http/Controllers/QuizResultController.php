<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizResultController extends Controller
{
    public function store(Request $request)
    {
        // Ambil user ID yang sedang login
        $userId = Auth::id();

        // Validasi input
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'score' => 'required|integer|min:0',
        ]);

        // Simpan hasil quiz
        QuizResult::create([
            'user_id' => $userId,
            'quiz_id' => $request->quiz_id,
            'score' => $request->score,
            'completed_at' => now(), // Gunakan tanggal saat ini sebagai waktu penyelesaian
        ]);

        return redirect()->route('student.quiz_results')->with('success', 'Quiz completed successfully!');
    }

    // Method untuk menampilkan hasil quiz
    public function showResults()
    {
        $userId = Auth::id(); // Sesuaikan dengan bagaimana Anda mengelola autentikasi pengguna
        $quizResults = QuizResult::where('user_id', $userId)->get();

        return view('student.quiz_results', compact('quizResults'));
    }
}
