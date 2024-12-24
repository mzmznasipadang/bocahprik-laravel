<?php

namespace App\Http\Controllers;
use App\Models\QuizResult;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::with('section')->get();
        return view('admin.quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        $sections = Section::all();
        return view('admin.quizzes.create', compact('sections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_id' => 'required|exists:sections,id',
            'title' => 'required|string|max:255',
            'passing_score' => 'required|integer|min:0|max:100',
        ]);

        Quiz::create($request->all());

        return redirect()->route('quizzes.index')->with('success', 'Quiz created successfully.');
    }

    public function edit(Quiz $quiz)
    {
        $sections = Section::all();
        return view('admin.quizzes.edit', compact('quiz', 'sections'));
    }

    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'section_id' => 'required|exists:sections,id',
            'title' => 'required|string|max:255',
            'passing_score' => 'required|integer|min:0|max:100',
        ]);

        $quiz->update($request->all());

        return redirect()->route('quizzes.index')->with('success', 'Quiz updated successfully.');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully.');
    }

    public function start($course_id)
    {
        $quizzes = Quiz::with(['questions', 'section'])
            ->whereHas('section', function ($query) use ($course_id) {
                $query->where('course_id', $course_id);
            })->get();
    
        if ($quizzes->isEmpty()) {
            return redirect()->back()->with('error', 'Quiz tidak tersedia untuk kursus ini.');
        }
    
        return view('student.quiz.start', compact('quizzes'));
    }

    public function submitQuiz(Request $request)
{
    $request->validate([
        'quiz_id' => 'required|exists:quizzes,id',
        'answers.*' => 'required|in:option_1,option_2,option_3,option_4'
    ]);

    $score = 0;

    foreach ($request->answers as $questionId => $selectedOption) {
        $question = QuizQuestion::find($questionId);
        if ($question->correct_answer === $selectedOption) {
            $score++;
        }
    }

    $totalQuestions = count($request->answers);
    $quizId = $request->quiz_id;
    $userId = Auth::id();// Sesuaikan dengan bagaimana Anda mengelola autentikasi pengguna

    QuizResult::create([
        'user_id' => $userId,
        'quiz_id' => $quizId,
        'score' => ($score / $totalQuestions) * 100, // Menghitung persentase
        'completed_at' => now(),
    ]);

    return redirect()->route('quiz.result', [
        'quiz_id' => $request->quiz_id,
        'score' => ($score / $totalQuestions) * 100
    ]);
}

    public function showResult(Request $request)
    {
        $quiz = Quiz::find($request->quiz_id);
        $score = $request->score;

        return view('student.quiz_result', compact('quiz', 'score'));
    }
    

}
