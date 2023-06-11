<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Course extends Model
// {
//     use HasFactory;
//     protected $primaryKey = 'CourseID';
//     public function resources() {
//         return $this->hasMany(Resource::class);
//     }
// }

class Course extends Model
{
    use HasFactory;

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
