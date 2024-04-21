<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller

{
    public function _construct()
    {
        $this->middleware('auth');
    }


    function view_employee(Request $request)
    {

        $all_employees = User::all();
        $user = Auth::user();
        $user_role = $user->is_admin;
        if ($user_role) {
            return view('employee.view', compact('all_employees'));
        }
        return view('employee.user_view', compact('all_employees'));
    }


    function create_employee()
    {

        return view('employee.create');
    }


    function save_employee(Request $request)
    {
        $request->validate([
            'name' => ['string'],
            'email' => ['string'],
            'job_title' => ['string'],

            // 'password' => Hash::('password'),

        ]);
        $user = new user();
        $user->is_admin = 0;
        if ($request->name == 'admin') {
            $user->is_admin = 1;
        }


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'job_title' => $request->job_title,
            'password' => Hash::make($request->password),
            'is_admin' => $user->is_admin,
        ]);













        return redirect()->route('employee.view');
    }

    function edit_employee($id)
    {
        $employee = User::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    function update_employee(Request $request, $id)
    {
        $request->validate([
            'name' => ['string'],
            'email' => ['string'],
            'job_title' => ['string'],

        ]);

        $employee = User::findOrFail($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->job_title = $request->job_title;

        $employee->is_admin = 0;
        if ($request->name == 'admin') {
            $employee->is_admin = 1;
        };
        $employee->save();


        return redirect()->route('employee.view');
    }

    function delete_employee($id)
    {
        $employee = User::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee.view');
    }
}
