<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Education\education_public_secondary_school_teachers_by_sex_Model;
use View;

class education_public_secondary_school_teachers_by_sex extends Controller
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
        
        $education_public_secondary_school_teachers_by_sex = education_public_secondary_school_teachers_by_sex_Model::all();
        
        return view('Forms.Education.national.publicsecondaryschoolteachersbysex',['post' =>$education_public_secondary_school_teachers_by_sex]);
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
     * Store a newly created resoce in storage.
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
            $secondary  = new education_public_secondary_school_teachers_by_sex_Model();
            $secondary->number=$request->number;
            $secondary->proportion=$request->proportion;
            $secondary->gender=$request->gender;
            $secondary->year=$request->year;
            $secondary->save();
             return response()->json($secondary);
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
       
         
         $secondary =  education_public_secondary_school_teachers_by_sex_Model::findOrfail($candidate_id);

  
          echo json_encode($secondary);     
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
         
            $secondary =   education_public_secondary_school_teachers_by_sex_Model::find($request->id);
          
            $secondary->number =$request->number;
            $secondary->proportion=$request->proportion;
             $secondary->gender =$request->gender;
          
            $secondary->year=$request->year;
            $secondary->save();
             return response()->json($secondary);
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
