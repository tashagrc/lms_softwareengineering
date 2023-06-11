<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $primaryKey = 'QuestionID';
    public function quizzes() {
        return $this->belongsTo(Quiz::class);
    }
}
