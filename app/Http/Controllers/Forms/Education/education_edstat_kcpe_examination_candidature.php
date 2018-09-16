<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Education\education_edstat_kcpe_examination_candidature_Model;
use View;


class education_edstat_kcpe_examination_candidature extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
     protected $rules =
    [
      'kcpe_candidature'=>'required|numeric',
      'gender'=>'required|alpha_dash',
      'year'=>'required|numeric'
          
                              
                        
    ];
    public function index()
    {
        
        $education_edstat_kcpe_examination_candidature =education_edstat_kcpe_examination_candidature_Model::all();
        
        return view('Forms.Education.national.edstatkcpeexaminationcandidature',['post' =>$education_edstat_kcpe_examination_candidature]);
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
        'kcpe_candidature'=>'required|numeric',
      'gender'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $candidature = new education_edstat_kcpe_examination_candidature_Model();
            $candidature->kcpe_candidature =$request->kcpe_candidature;
            $candidature->gender=$request->gender;
            $candidature->year=$request->year;
            $candidature->save();
             return response()->json($candidature);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($candidature_id)
    {
       
         
         $candidature =  education_edstat_kcpe_examination_candidature_Model::findOrfail($candidature_id);

  
          echo json_encode($candidature);     
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
        'kcpe_candidature'=>'required|numeric',
      'gender'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $candidature =education_edstat_kcpe_examination_candidature_Model::find($request->id);
            $candidature->kcpe_candidature =$request->kcpe_candidature;
            $candidature->gender=$request->gender;
            $candidature->year=$request->year;
            $candidature->save();
             return response()->json($candidature);
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
