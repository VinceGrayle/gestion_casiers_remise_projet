<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locker;
use App\Models\Student;

class LockerController extends Controller
{
    // TODO: Factoriser cette méthode dans un fichier utils.php
    private function generate_number()
    {
        // 20 characters, only 0-9a-f
        return bin2hex(random_bytes(10));
    }

    public function create()
    {
        //var_dump("Méthode create");

        //var_dump(request()->post());

        request()->validate([
            'number'    => ['required'],
            'firstName' => ['required'],
            'lastName'  => ['required'],
        ]);

        $number    = request('number');
        $firstName = request('firstName');
        $lastName  = request('lastName');
        $class = "fin1";

        /*
        var_dump("Number : " . $number);
        var_dump("F: " . $firstName);
        var_dump("L" . $lastName);
        */

        $student = Student::where('lastname', '=', $lastName)->where('firstName', '=', $firstName)->where('class', '=', $class)->get();
        if ($student->isEmpty()) {
            $student = Student::create([
                'firstname' => $firstName,
                'lastname'  => $lastName,
                'class'     => $class
            ]);
        } else {
            $student = $student->first();
        }

        //dd($student->id);

        $locker = Locker::create([
            'number'     => $number,
            'student_id' => $student->id
        ]);

        return redirect('/locker/manage');
    }

    public function get_all()
    {
        $lockers = Locker::all();

        return view('locker/manage', [
            'lockers' => $lockers,
        ]);
    }

    public function delete($id)
    {
        Locker::destroy($id);
        return redirect('/locker/manage');
    }
}
