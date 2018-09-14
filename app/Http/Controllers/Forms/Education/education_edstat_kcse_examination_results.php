<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Education\education_edstat_kcse_examination_results_Model;
use View;


class education_edstat_kcse_examination_results extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
     protected $rules =
    [
      'number_of_candidates'=>'required|numeric',
      'kcse_grade'=>'required|alpha_dash',
      'sex'=>'required|alpha_dash',
     
      'year'=>'required|numeric'
          
                              
                        
    ];
    public function index()
    {
        
        $education_edstat_kcse_examination_results =education_edstat_kcse_examination_results_Model::all();
        
        return view('Forms.Education.national.edstatkcseexaminationresults',['post' =>$education_edstat_kcse_examination_results]);
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
        'number_of_candidates'=>'required|numeric',
      'kcse_grade'=>'required|alpha_dash',
      'sex'=>'required|alpha_dash',
     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $results = new education_edstat_kcse_examination_results_Model();
            $results->number_of_candidates =$request->number_of_candidates;
            $results->kcse_grade=$request->kcse_grade;
            $results->sex=$request->sex;
            $results->year=$request->year;
            $results->save();
             return response()->json($results);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kcse_result_id)
    {
       
         
         $kcse_result_id = education_edstat_kcse_examination_results_Model::findOrfail($kcse_result_id);

  
          echo json_encode($kcse_result_id);     
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
       'number_of_candidates'=>'required|numeric',
      'kcse_grade'=>'required|alpha_dash',
      'sex'=>'required|alpha_dash',
     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $results = education_edstat_kcse_examination_results_Model::find($request->id);
            $results->number_of_candidates =$request->number_of_candidates;
            $results->kcse_grade=$request->kcse_grade;
            $results->sex=$request->sex;
            $results->year=$request->year;
            $results->save();
             return response()->json($results);
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
