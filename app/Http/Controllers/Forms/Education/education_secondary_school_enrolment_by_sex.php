<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Education\education_secondary_school_enrolment_by_sex_Model;
use View;

class education_secondary_school_enrolment_by_sex extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
     protected $rules =
    [
      'boys'=>'required|numeric',
      'girls'=>'required|numeric',
      'total'=>'required|numeric',
     'percentage_girls'=>'required|numeric',
      'parity_index'=>'required|numeric',
     
      'year'=>'required|numeric'
          
                              
                        
    ];
    public function index()
    {
        
        $education_secondary_school_enrolment_by_sex = education_secondary_school_enrolment_by_sex_Model::all();
        
        return view('Forms.Education.national.secondaryschoolenrolmentbysex',['post' =>$education_secondary_school_enrolment_by_sex]);
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
       'boys'=>'required|numeric',
      'girls'=>'required|numeric',
      'total'=>'required|numeric',
     'percentage_girls'=>'required|numeric',
      'parity_index'=>'required|numeric',
     
      'year'=>'required|numeric'
          
          
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $sexsecondary = new education_secondary_school_enrolment_by_sex_Model();
            $sexsecondary->boys =$request->boys;
            $sexsecondary->girls=$request->girls;
            $sexsecondary->total=$request->total;
            $sexsecondary->percentage_girls=$request->percentage_girls;
            $sexsecondary->parity_index=$request->parity_index;
            $sexsecondary->year=$request->year;
            $sexsecondary->save();
             return response()->json($sexsecondary);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($enrolment_id)
    {
       
         
         $enrolment_id = education_secondary_school_enrolment_by_sex_Model::findOrfail($enrolment_id);

  
          echo json_encode($enrolment_id);     
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
      'boys'=>'required|numeric',
      'girls'=>'required|numeric',
      'total'=>'required|numeric',
     'percentage_girls'=>'required|numeric',
      'parity_index'=>'required|numeric',
     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $sexsecondary = education_secondary_school_enrolment_by_sex_Model::find($request->id);
            $sexsecondary->boys =$request->boys;
            $sexsecondary->girls=$request->girls;
            $sexsecondary->total=$request->total;
            $sexsecondary->percentage_girls=$request->percentage_girls;
            $sexsecondary->parity_index=$request->parity_index;
            $sexsecondary->year=$request->year;
            $sexsecondary->save();
             return response()->json($sexsecondary);
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
