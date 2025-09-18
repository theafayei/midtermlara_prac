<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('student')->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store a newly created course
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Display the specified course
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Show the form for editing the specified course
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Update the specified course
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Remove the specified course
    }
}
