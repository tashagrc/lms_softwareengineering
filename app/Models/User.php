<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'users';
    protected $primaryKey = 'UserID';

    protected $fillable = [
        'UserName',
        'UserEmail',
        'UserPassword',
    ];

    protected $attributes = [
        'UserDateJoined' => '2022-08-09',
        'UserRole' => 'Student',
        'ClassroomID' => 1
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function answers() {
        return $this->hasMany(Answer::class);

    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'ClassroomID');
    }


    public function userQuiz()
    {
        return $this->hasOne(UserQuiz::class, 'UserID', 'UserID');
    }
    
}
