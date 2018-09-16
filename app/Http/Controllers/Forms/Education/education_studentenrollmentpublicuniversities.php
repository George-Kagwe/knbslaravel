<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Education\education_studentenrollmentpublicuniversities_Model;
use View;


class education_studentenrollmentpublicuniversities extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
     protected $rules =
    [
  
      'undergraduates'=>'required|numeric',
      'postgraduates'=>'required|numeric',
       'year'=>'required|numeric',
      'other'=>'required|numeric'
          
                              
                        
    ];
    public function index()
    {
        
        $education_studentenrollmentpublicuniversities =education_studentenrollmentpublicuniversities_Model::all();
        
        return view('Forms.Education.national.studentenrollmentpublicuniversities',['post' =>$education_studentenrollmentpublicuniversities]);
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
        
      'undergraduates'=>'required|numeric',
      'postgraduates'=>'required|numeric',

      'other'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $universities= new education_studentenrollmentpublicuniversities_Model();
             
       
            $universities->undergraduates=$request->undergraduates;
            $universities->postgraduates=$request->postgraduates;
            $universities->other=$request->other;
             $universities->year=$request->year;
            $universities->save();
             return response()->json($universities);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($student_enrollment_id)
    {
       
         
         $universities = education_studentenrollmentpublicuniversities_Model::findOrfail($student_enrollment_id);

  
          echo json_encode($universities);     
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
     
      'undergraduates'=>'required|numeric',
      'postgraduates'=>'required|numeric',

      'other'=>'required|numeric',
        'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $universities =education_studentenrollmentpublicuniversities_Model::find($request->id);

           
       
            $universities->undergraduates=$request->undergraduates;
            $universities->postgraduates=$request->postgraduates;
            $universities->other=$request->other;
             $universities->year=$request->year;

            $universities->save();
             return response()->json($universities);
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
