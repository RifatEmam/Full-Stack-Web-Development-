<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){ return view('students.index'); }
    public function create(){ return view('students.create'); }
    public function store(Request $request){ return redirect()->route('students.index'); }
    public function show($id){ return "Showing student ID: $id"; }
    public function edit($id){ return view('students.edit', compact('id')); }
    public function update(Request $request, $id){ return redirect()->route('students.index'); }
    public function destroy($id){ return redirect()->route('students.index'); }
}