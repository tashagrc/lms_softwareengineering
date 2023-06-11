<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function classrooms() {
        return $this->belongsTo(Classroom::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }
    public function userQuizzes()
{
    return $this->hasMany(UserQuiz::class, 'quizID');
}
    protected $primaryKey = 'QuizID';

}
