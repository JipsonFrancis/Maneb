<?php

namespace App\Http\Controllers;

use App\Models\Checkpoint;
use App\Models\ExamPaper;
use App\Models\Transit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $paper = ExamPaper::findOrFail($id);
        //create collection
        $transit = $paper->pack->box->transit;

        // get the lasted checkpoint for this transit 
        $checkpoint_id = DB::table("checkpoints")->get()->where("transit_id", $transit->id)->sortBy("created_at")->last()->id;
        $checkpoint = Checkpoint::findOrFail($checkpoint_id);
        $packets = collect();

        foreach($transit->boxes as $box )
        {
            foreach($box->packs as $packet)
            {
                $packets->push([
                    'packet' => $packet,
                ]);
            }
        }

        $collection = collect([
            'transit_id' => $transit->id,
            'licence' => $transit->truck->licence,
            'Model' => "car x",
            'name' => $transit->name,
            'driver_id' => $transit->driver->id,
            'driver' =>  $transit->driver->name,
            'driver_email' => $transit->driver->email,
            'boxes' => $transit->boxes,
            'packet' => $packets,
            'center' => $checkpoint->center,
        ]);
        //dd($collection);
        return view('Transit.transit', ['transits' => Transit::all(), 'Transit' => $collection]);
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
        dd("need to create a page to edit the variables or javascript which is the best way my guy");
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

    public function qrGenerator(Request $req)
    {
        $paper = ExamPaper::first();
        $qr = 'http://127.0.0.1:8000/exampapers/'.$paper->id;
        return $qr;
    }
}
