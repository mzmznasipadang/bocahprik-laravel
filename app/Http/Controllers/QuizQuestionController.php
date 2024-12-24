<?php
namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizQuestionController extends Controller
{
    public function index()
    {
        $quizQuestions = QuizQuestion::with('quiz')->get();
        return view('admin.quiz_questions.index', compact('quizQuestions'));
    }

    public function create()
    {
        $quizzes = Quiz::all();
        return view('admin.quiz_questions.create', compact('quizzes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'question' => 'required|string|max:255',
            'option_1' => 'required|string|max:255',
            'option_2' => 'required|string|max:255',
            'option_3' => 'required|string|max:255',
            'option_4' => 'required|string|max:255',
            'correct_answer' => 'required|string|in:option_1,option_2,option_3,option_4',
        ]);

        QuizQuestion::create($validated);

        return redirect()->route('quiz_questions.index')->with('success', 'Question added successfully!');
    }

    public function edit(QuizQuestion $quizQuestion)
    {
        $quizzes = Quiz::all();
        return view('admin.quiz_questions.edit', compact('quizQuestion', 'quizzes'));
    }

    public function update(Request $request, QuizQuestion $quizQuestion)
    {
        $validated = $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'question' => 'required|string|max:255',
            'option_1' => 'required|string|max:255',
            'option_2' => 'required|string|max:255',
            'option_3' => 'required|string|max:255',
            'option_4' => 'required|string|max:255',
            'correct_answer' => 'required|string|in:option_1,option_2,option_3,option_4',
        ]);

        $quizQuestion->update($validated);

        return redirect()->route('quiz_questions.index')->with('success', 'Question updated successfully!');
    }

    public function destroy(QuizQuestion $quizQuestion)
    {
        $quizQuestion->delete();
        return redirect()->route('quiz_questions.index')->with('success', 'Question deleted successfully!');
    }
}
