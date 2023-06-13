<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Quiz extends Model
{
    use HasFactory;

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function information(){
        return $this->belongsTo(Quiz::class);
    }

    public function sessions(){
        return $this->belongsTo(Session::class);
    }

    protected $primaryKey = 'QuizID';
    protected $fillable = [
        'QuizTitle',
        'QuizArticle',
        'QuizDate',
        'QuizStart',
        'QuizEnd',
        'QuizPrepare',
        'SessionID',
        'CourseID',
        'ClassroomID',
    ];


}

