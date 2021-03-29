<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return Employee::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'          => 'required',
            'lname'       => 'required',
            'fname'       => 'required',
            'job'         => 'required'
        ]);

        return Employee::create($request->all());
    }

    public function show(Employee $employee)
    {
        return Employee::with('children')->where('employees.id', $employee->id)->get();
    }

    public function update(Request $request, Employee $employee)
    {
        $employee = Employee::find($employee->id);
        $employee->update($request->all());
        return $employee;
    }

    public function destroy(Employee $employee)
    {
        return Employee::destroy($employee->id);
    }

}
