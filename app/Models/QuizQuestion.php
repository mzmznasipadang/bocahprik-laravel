<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'question',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'correct_answer',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
