<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentModel;

class Department extends Controller
{
    public function index(){

        $data = DepartmentModel::all();
        // $data = EmployeeModel::where('employee_id', 3)->get();
        
        return view('department.index', ['department' => $data]);
    
    }
}
