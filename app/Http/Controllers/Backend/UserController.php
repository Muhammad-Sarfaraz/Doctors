<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\GeneralUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('frontend.user.index');
    }

    public function login(Request $request)
    
    {
        $this->validate($request,[
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255',
        ]);


            if(Auth::attempt(['email' =>$request->email, 'password' => $request->password]))
            {
                        echo "Done";
            }else{
                echo "Error";
            }

      // print_r($request->all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function validation($request)
   {
    return $this->validate($request,[
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users|max:255',
        'password' => 'required|max:255',
    ]);

   }
    public function store(Request $request)
    {
        
        $this->validation($request);
        //print_r($request->all());
        $data = new GeneralUser;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        
       
        $data->save();

        return back()->with('status','Successfully Registered!');


        
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
    }
}
