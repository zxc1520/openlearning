<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function course()
    {
        # code...
        return $this->belongsTo(Course::class);
    }
}
