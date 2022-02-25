<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Locker extends Model
{
    protected $fillable = [
        'number',
        'student_id'
    ];

    use HasFactory;

    function student()
    {
        return $this->belongsTo(Student::class);
    }
}
