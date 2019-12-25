<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users', $users);
    }

    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status', 'Your Data is Updated');
    }
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status', 'Your Data is Deleted');
    }

    public function ShowUser()
    {
        $users = User::all();
        // $users = DB::table('users')
        //     ->join('rooms', 'users.id', '=', 'rooms.id')
        //     ->join('students', 'users.id', '=', 'students.id')
        //     ->select('users.*', 'rooms.building_name', 'students.std_name')
        //     ->get();

        //     return view('admin.dashboard',compact('users'));
    

        return view('admin.dashboard')->with('users',$users);
    }
}
