<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Subscription;
use App\Models\User;


class SubscriptionController extends Controller
{
    //
    public function index()
    {
        //
        $subscription = Subscription::all();

        return view('template.dashboard.sub.index')->with('sub',$subscription);
    }

    public function display($sub)
    {
        $sub = Subscription::where('id',$sub)->get();
        // print_r($sub);
        return view('template.front-end.subscribe')->with('sub',$sub);
    }

    public function accountCreate(Request $request)
    {
        $validate = $request->validate(['sir_name'=>'required',
                                        'other_name'=>'required',
                                        'email'=>'required',
                                        'phone'=>'required',
                                        'password'=>'required'
                                        ]);
        if ($validate) 
        {

            $email_exists = User::where('email',$request->email)->get();
          
            

            if ($email_exists->count()) 
            {
                return response()->json(['response'=>'Email Exists']);
            }
            else
            {
               $hash = Hash::make($request->password);

               $user = new User;

               $user->name = $request->sir_name.','.$request->other_name;
               $user->email = $request->email;
               $user->password = $hash;
               $user->role_id = 2;
               $user->phone = $request->phone;
               $user->account_status = 0;

               if ($user->save()) 
               {
                   return response()->json(['response'=>'Account Created Successfully']);
                // return redirect()->route('landing');
               }
               else
               {
                    return response()->json(['response'=>'Internal server error! please try again']);
               }

          }
       }
        else
        {
            return response()->json(['response'=>'Invalid details']);
        }
       // User::create([
       //      'name' => $data['name'],
       //      'email' => $data['email'],
       //      'password' => Hash::make($data['password']),
       //      'role_id' => $data['role_id'],
       //      'phone'=>$data['phone'],
       //      'account_status'=>0,
       //  ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('template.dashboard.sub.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate(['name'=>'required','amount'=>'required']);

        if ($validate) 
        {
            $sub = new Subscription;
            $sub->name = $request->name;
            $sub->amount = $request->amount;

            if ($sub->save()) 
            {
                // return response()->json(['status_code'=>201]);
                return redirect()->back();
            }
            else
            {
                return response()->json(['status_code'=>500]);
            }
        }
        else
        {
            return response()->json(['status_code'=>300]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sub = Subscription::findOrFail($id);

        return view('template.dashboard.sub.edit')->with('sub',$sub);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validate = $request->validate(['name'=>'required','amount'=>'required']);

        if ($validate) 
        {
            $sub = Subscription::where('id',$id)->first()->update(['name'=>$request->name,'amount'=>$request->amount]);

            if ($sub) 
            {
                // return response()->json(['status_code'=>200]);
                return redirect()->back();
            }
            else
            {
                return response()->json(['status_code'=>500]);
            }
        }
        else
        {
            return response()->json(['status_code'=>300]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sub = Subscription::findOrFail($id);

        if ($sub->delete()) 
        {
            // return response()->json(['status_code'=>200]);
            return redirect()->back();
        }
        else
        {
            return response()->json(['status_code'=>500]);
        }
    }

}
