<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $primaryKey = 'AnswerID';
    protected $fillable = ['AnswerContent', 'QuizID', 'UserID'];
    public function users() {
        return $this->belongsTo(Answer::class);
    }

    public function quizzes() {
        return $this->belongsTo(Quiz::class);
    }
}
