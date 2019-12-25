<?php

namespace App\Http\Controllers\Student;

use App\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('student.dashboard')->with('users',$users);
    }


}
