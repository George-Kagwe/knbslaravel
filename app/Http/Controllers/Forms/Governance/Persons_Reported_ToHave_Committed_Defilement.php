<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\Persons_Reported_ToHave_Committed_Defilement_model;
use View;

class Persons_Reported_ToHave_Committed_Defilement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



       protected $rules =
    [
      'number'=>'required|numeric',
      'proportion'=>'required|numeric',
      'gender'=>'required|alpha_dash',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
         $Persons_Reported_ToHave_Committed_Defilement =Persons_Reported_ToHave_Committed_Defilement_model::all();
        
        return view('forms.governance.national.Persons_Reported_ToHave_Committed_Defilement',['post' =>
            $Persons_Reported_ToHave_Committed_Defilement]);
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
    

       $validator = \Validator::make($request->all(), [
       'number'=>'required|numeric',
      'proportion'=>'required|numeric',
      'gender'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $persons = new Persons_Reported_ToHave_Committed_Defilement_model();
            $persons->number =$request->number;
            $persons->proportion=$request->proportion;
            $persons->gender=$request->gender;
            $persons->year=$request->year;
            $persons->save();
             return response()->json($persons);
           echo json_encode(array("status" => TRUE));

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($persons_id)
    {
        

        $persons = Persons_Reported_ToHave_Committed_Defilement_model::findOrfail($persons_id);
        echo json_encode($persons);   


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
     $validator = \Validator::make($request->all(), [
      'number'=>'required|numeric',
      'proportion'=>'required|numeric',
      'gender'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $persons =Persons_Reported_ToHave_Committed_Defilement_model::find($request->id);

            $persons->number =$request->number;
            $persons->proportion=$request->proportion;
            $persons->gender=$request->gender;
            $persons->year=$request->year;
            $persons->save();
             return response()->json($persons);
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
