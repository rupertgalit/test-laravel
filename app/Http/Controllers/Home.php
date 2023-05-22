<?php

namespace App\Http\Controllers;

use App\Models\DepartmentModel;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home(){

        return view('index');

    }
    public function employees(){

        return view('employee.index');

    }

    public function department(){

        $data = DepartmentModel::all();
        // $data = EmployeeModel::where('employee_id', 3)->get();
        
        return view('department.index', ['department' => $data]);
        
    }
}
