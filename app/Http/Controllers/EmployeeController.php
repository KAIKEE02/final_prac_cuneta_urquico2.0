<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
        /**
        * Display a listing of the resource.
        */
        public function index()
        {
            $employee = Employee::all();
            return view('employee.index', compact('employee'));
        }
    
        /**
        * Show the form for creating a new resource.
        */
        public function create()
        {
            return view('employee.create');
            
        }
    
        /**
        * Store a newly created resource in storage.
        */
        public function store(Request $request)
        {
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'mname' => 'required',
                'age' => 'required|integer',
                'dobirth' => 'required|date',
            ]);

            Employee::create($request->all());
            return redirect()->route('employee.index')
                ->with('success', 'Employee created successfully.');
        }
    
        /**
        * Display the specified resource.
        */
        public function show(string $id)
        {
            //
        }
    
        /**
        * Show the form for editing the specified resource.
        */
        public function edit(string $id)
        {
            
        }
    
        /**
        * Update the specified resource in storage.
        */
        public function update(Request $request, string $id)
        {
            //
        }
    
        /**
        * Remove the specified resource from storage.
        */
        public function destroy(string $id)
        {
            //
        }
}
