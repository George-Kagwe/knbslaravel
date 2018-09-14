<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Education\education_edstat_kcpe_examination_results_by_subject_Model;
use View;

class education_edstat_kcpe_examination_results_by_subject extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
     protected $rules =
    [
      'kcpe_result'=>'required|numeric',
      'subject'=>'required|alpha_dash',
      'year'=>'required|numeric'
          
                              
                        
    ];
    public function index()
    {
        
        $education_edstat_kcpe_examination_results_by_subject =education_edstat_kcpe_examination_results_by_subject_Model::all();
        
        return view('Forms.Education.national.edstatkcpeexaminationresultsbysubject',['post' =>$education_edstat_kcpe_examination_results_by_subject]);
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
        'kcpe_result'=>'required|numeric',
      'subject'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $subject = new education_edstat_kcpe_examination_results_by_subject_Model();
            $subject->kcpe_result =$request->kcpe_result;
            $subject->subject=$request->subject;
            $subject->year=$request->year;
            $subject->save();
             return response()->json($subject);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kcpe_result_id)
    {
       
         
         $kcpe_result_id = education_edstat_kcpe_examination_results_by_subject_Model::findOrfail($kcpe_result_id);

  
          echo json_encode($kcpe_result_id);     
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
        'kcpe_result'=>'required|numeric',
      'subject'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $subject = education_edstat_kcpe_examination_results_by_subject_Model::find($request->id);
            $subject->kcpe_result =$request->kcpe_result;
            $subject->subject=$request->subject;
            $subject->year=$request->year;
            $subject->save();
             return response()->json($subject);
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
