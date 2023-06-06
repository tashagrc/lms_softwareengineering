<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $primaryKey = 'ResourceID';

    public function sessions() {
        return $this->belongsTo(Session::class);
    }

    public function courses() {
        return $this->belongsTo(Course::class);
    }
}
