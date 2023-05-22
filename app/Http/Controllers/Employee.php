<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;

use Illuminate\Http\Request;

class Employee extends Controller
{
    public function index(){

        $data = EmployeeModel::all();
        // $data = EmployeeModel::where('employee_id', 3)->get();
        
        return view('employee.index', ['employee' => $data]);
    }

    public function greetings(){
        // echo "HELLO WORLD";
        return view('employee.index');
    }
    // public function show($id){

    //     $data = array(
    //         "id" => $id,
    //         "name" => "Rupert",
    //         "age" => "23",
    //         "email" => "rgalit@netglobalsolutions.net"
    //     );
    //     return view ('user', $data);
    // }
}
