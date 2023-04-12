<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExamPaperRequest;
use App\Models\ExamPaper;
use Illuminate\Http\Request;

class ExamPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $papers = ExamPaper::all();
        return response()->json([
            'paper' => $papers
        ]);
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
    public function store(StoreExamPaperRequest $request)
    {
        $paper = ExamPaper::create($request->all());
    
        return response()->json([
            'message' => "paper saved successfully!",
            'Paper' => $paper
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamPaper $examPaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExamPaper $examPaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreExamPaperRequest $request, ExamPaper $paper)
    {
        $paper->update($request->all());
    
        return response()->json([
            'message' => "paper updated successfully!",
            'Paper' => $paper
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamPaper $paper)
    {
        $paper->delete();
    
        return response()->json([
            'message' => "ExamPaper deleted successfully!",
        ], 200);
    }
}
