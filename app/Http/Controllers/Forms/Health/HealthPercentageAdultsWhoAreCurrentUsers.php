<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthPercentageAdultsWhoAreCurrentUsers_Model;
use View;

class HealthPercentageAdultsWhoAreCurrentUsers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        protected $rules =
    [
      'age_group'=>'required|alpha_dash',
      'women'=>'required|numeric',
       'men'=>'required|numeric',
        
         'category'=>'required|alpha'
                              
                        
    ];
    public function index()
    {
        //
            $HealthPercentageAdultsWhoAreCurrentUsers =HealthPercentageAdultsWhoAreCurrentUsers_Model::all();
        
        return view('Forms.health.national.healthpercentageadultswhoarecurrentusers',['post' =>$HealthPercentageAdultsWhoAreCurrentUsers]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $validator = \Validator::make($request->all(), [
       'age_group'=>'required|alpha_dash',
      'women'=>'required|numeric',
       'men'=>'required|numeric',
        
         'category'=>'required|alpha'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $user = new HealthPercentageAdultsWhoAreCurrentUsers_Model();
            $user->age_group =$request->age_group;
            $user->women=$request->women;
            $user->men=$request->men;
            
            $user->category=$request->category;
            $user->save();
             return response()->json($user);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        //
         $user = HealthPercentageAdultsWhoAreCurrentUsers_Model::findOrfail($user_id);

  
          echo json_encode($user);
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
    public function update(Request $request)
    {
        //
         $validator = \Validator::make($request->all(), [
   'age_group'=>'required|alpha_dash',
      'women'=>'required|numeric',
       'men'=>'required|numeric',
        
         'category'=>'required|alpha'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $user=HealthPercentageAdultsWhoAreCurrentUsers_Model::find($request->id);
            $user->age_group=$request->age_group;
            $user->women=$request->women;
            $user->men=$request->men;
              
                $user->category=$request->category;
            $user->save();
             return response()->json($user);
           echo json_encode(array("status" => TRUE));

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
    }
}
