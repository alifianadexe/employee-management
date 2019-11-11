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

    public function form(){
        return view('employee/employee-input');
    }

    public function input(Request $request){
        DB::table('employees')->insert([
            'emp_no' => $request->emp_no,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'hire_date' => $request->hire_date,
        ]);
        return redirect('/');
    }
    
    public function edit($emp_no){
        $employe = DB::table('employees')->where('emp_no',$emp_no)->get();
        return view('employee/employee-detail',[
                    'employee' => $employe,
                    'disabled' => ''
                ]);
    }

    public function update(Request $request){
        DB::table('employees')->where('emp_no', $request->emp_no)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'hire_date' => $request->hire_date,
        ]);
        return redirect('/');
    }

    public function detail($emp_no){
        $employe = DB::table('employees')->where('emp_no',$emp_no)->get();
        return view('employee/employee-detail',[
                    'employee' => $employe,
                    'disabled' => 'disabled=true'
                ]);
    }

    public function delete($emp_no){
       DB::table('employees')->where('emp_no', $emp_no)->delete();
       return redirect('/');
    }

}
