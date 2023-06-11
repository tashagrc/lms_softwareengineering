<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $primaryKey = 'SessionID';

    public function resources() {
        return $this->hasMany(Resource::class);
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'CourseID');
    }
}
