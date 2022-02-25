<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SutdentController extends Controller
{
    public function create()
    {
        request()->validate([
            'firstName' => ['required'],
            'lastName'  => ['required'],
            'class'     => ['required'],
        ]);

        $firstName = request('firstName');
        $lastName = request('lastName');
        $class = request('class');

        $student = Student::create([
            'firstName' => $firstName,
            'lastName'  => $lastName,
            'class'     => $class,
        ]);

        return redirect('/student/manage');
    }
}
