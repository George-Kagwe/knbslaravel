<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Education\education_studentenrollmentbysextechnicalinstitutions_Model;
use View;

class education_studentenrollmentbysextechnicalinstitutions extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
     protected $rules =
    [
      'institution'=>'required|alpha_dash',
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      'year'=>'required|numeric'
          
                              
                        
    ];
    public function index()
    {
        
        $education_studentenrollmentbysextechnicalinstitutions =education_studentenrollmentbysextechnicalinstitutions_Model::all();
        
        return view('Forms.Education.national.studentenrollmentbysextechnicalinstitutions',['post' =>$education_studentenrollmentbysextechnicalinstitutions]);
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
        'institution'=>'required|alpha_dash',
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      'year'=>'required|numeric'
          
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $institutions = new education_studentenrollmentbysextechnicalinstitutions_Model();
            $institutions->institution=$request->institution;
            $institutions->male=$request->male;
            $institutions->female=$request->female;
            $institutions->year=$request->year;
            $institutions->save();
             return response()->json($institutions);
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
       
         
         $institutions = education_studentenrollmentbysextechnicalinstitutions_Model::findOrfail($student_enrollment_id);

  
          echo json_encode($institutions);     
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
         'institution'=>'required|alpha_dash',
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $institutions = education_studentenrollmentbysextechnicalinstitutions_Model::find($request->id);
            $institutions->institution =$request->institution;
            $institutions->male =$request->male;
            $institutions->female=$request->female;
          
            $institutions->year=$request->year;
            $institutions->save();
             return response()->json($institutions);
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
