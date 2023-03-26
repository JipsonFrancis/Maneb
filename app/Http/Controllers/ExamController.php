<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Exam.exam', ['exams' => Exam::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // create a exam and store it in the db
        $exam = Exam::create([
            'name' => $request->name,
            'year' => $request->year,
        ]);

        return back()->with('success', $exam->name.' exam has been created.');
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
        //
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
        //delete a exam
        $exam = Exam::findOrFail((int)$id);

        $exam->delete();

        return redirect()->back()->with('success', $exam->name.' from been deleted');
    }
}
