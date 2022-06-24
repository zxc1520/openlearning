<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public $table = "course";

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    public function coursesection()
    {
        # code...
        return $this->hasOne(CourseSection::class);
    }
}
