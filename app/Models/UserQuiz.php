<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuiz extends Model
{
    use HasFactory;

    // public function userName() {
    //     return $this->belongsTo(User::class, 'UserId');
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }
    public function answer()
    {
        return $this->hasOne(Answer::class, 'UserID', 'UserID');
    }
}
