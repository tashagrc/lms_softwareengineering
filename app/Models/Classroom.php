<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $primaryKey = 'ClassroomID';
    public function users() {
        return $this->hasMany(User::class);
    }

    public function quizzes() {
        return $this->hasMany(Quiz::class);
    }

}

