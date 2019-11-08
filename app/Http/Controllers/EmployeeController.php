<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(){
        $employees = DB::table('employees')->orderBy('emp_no','desc')->offset(0)->limit(100)->get();;
        return view('employee/employee-list',['employees' => $employees]);
    }

    public function input(){
        return view('employee/employee-input');
    }
    
}
