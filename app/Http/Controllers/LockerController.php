<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locker;

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
        request()->validate([
            'number' => ['required'],
        ]);

        $number = request('number');

        $locker = Locker::create([
            'number' => $number,
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
