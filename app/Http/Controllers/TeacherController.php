<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();

        return view('index', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:teachers,name',
            'materia' => 'required|string',
            'escola' => 'required|string'
        ]);

        if(Teacher::create($data)){
            return redirect()->route('teacher.index')->with('msg', 'Teacher created successfully');
        }

        return redirect()->route('teacher.index')->with('msg', 'Teacher creation failed');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('edit', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'materia' => 'required|string',
            'escola' => 'required|string'
        ]);

        if($teacher->update($data)){
            return redirect()->route('teacher.index')->with('msg', 'Teacher updated successfully');
        }

        return redirect()->route('teacher.index')->with('msg', 'Teacher updation failed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        if($teacher){
            if($teacher->delete()){
                return response() -> json([
                    'success' => true,
                    'message' => 'Teacher deleted successfully',
                    'route_link' => route('teacher.index')
                ]);
            }

            return response() -> json([
                'success' => false,
                'message' => 'Teacher deletion failed',
            ]);

        }

        return response() -> json([
            'success' => false,
            'message' => 'Not-Found',
        ], 404);
    }
}
