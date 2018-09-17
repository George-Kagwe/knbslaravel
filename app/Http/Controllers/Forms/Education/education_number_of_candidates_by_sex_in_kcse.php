<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Education\education_number_of_candidates_by_sex_in_kcse_Model;
use View;


class education_number_of_candidates_by_sex_in_kcse extends Controller
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
        
        $education_number_of_candidates_by_sex_in_kcse =education_number_of_candidates_by_sex_in_kcse_Model::all();
        
        return view('Forms.Education.national.numberofcandidatesbysexinkcse',['post' =>$education_number_of_candidates_by_sex_in_kcse]);
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
            $kcse = new education_number_of_candidates_by_sex_in_kcse_Model();
            $kcse->number =$request->number;
            $kcse->proportion=$request->proportion;
            $kcse->gender=$request->gender;
            $kcse->year=$request->year;
            $kcse->save();
             return response()->json($kcse);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($candidate_id)
    {
       
         
         $candidate_id = education_number_of_candidates_by_sex_in_kcse_Model::findOrfail($candidate_id);

  
          echo json_encode($candidate_id);     
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
         
            $kcse = education_number_of_candidates_by_sex_in_kcse_Model::find($request->id);
            $kcse->number =$request->number;
            $kcse->proportion=$request->proportion;
            $kcse->gender=$request->gender;
            $kcse->year=$request->year;
            $kcse->save();
             return response()->json($kcse);
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
