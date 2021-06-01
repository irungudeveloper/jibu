<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Subscription;
use App\Models\Question;


class DashboardController extends Controller
{
    //
     public function landing()
    {
    	return view('template.front-end.index');
    }

    public function getQuestions()
    {
        $question = Question::all();
        return view('template.front-end.question')->with('question',$question);
                              
    }

    public function getPackage()
    {
         $sub = Subscription::all();
        return view('template.front-end.package')->with('sub',$sub);
    }

}
