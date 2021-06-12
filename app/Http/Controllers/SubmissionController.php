<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;

class SubmissionController extends Controller
{
    //

    public function index()
    {
        $submission = Submission::all();

        return view('template.dashboard.jobs.index')->with('submission',$submission);
    }

    public function store(Request $request)
    {
        // code...

        $submission = new Submission;

        $submission->name = $request->input('name');
        $submission->email = $request->input('email');
        $submission->description = $request->input('description');
        $submission->hours = $request->input('hours');
        $submission->pages = $request->input('pages');
        $submission->paper = $request->input('paper');

        $submission->save();

        return response()->json(['data'=>$submission]);
    }
}
