<?php

namespace App\Http\Controllers;

use App\Models\ExamPaper;
use Illuminate\Http\Request;

class ExamPaperController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ExamPaper.exampaper', ['exampapers' => ExamPaper::all()]);
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
        $exam = ExamPaper::create([
            'name' => $request->name,
            'exam_id' => $request->exam_id,
            'subject_id' => $request->subject_id,
            'invigilator' => $request->invigilator,
            'paper_number' => $request->paper_number,
            'date' => $request->date
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
        //delete a exampaper
        $exampaper = ExamPaper::findOrFail((int)$id);

        $exampaper->delete();

        return redirect()->back()->with('success', $exampaper->name.' from been deleted');
    }
}
