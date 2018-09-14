<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Education\AprrovedDegreeDiplomaPrograms_Model;
use View;



class AprrovedDegreeDiplomaPrograms extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
     protected $rules =
    [
      'validated_diploma_programmes'=>'required|numeric',
      'approved_private_university_degreeprogrammes'=>'required|numeric',
      'approved_degree_programmes'=>'required|numeric',
      'year'=>'required|numeric'
          
                              
                        
    ];
    public function index()
    {
        
        $AprrovedDegreeDiplomaPrograms =AprrovedDegreeDiplomaPrograms_Model::all();
        
        return view('Forms.Education.national.approveddegreediplomaprograms',['post' =>$AprrovedDegreeDiplomaPrograms]);
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
        'validated_diploma_programmes'=>'required|numeric',
      'approved_private_university_degreeprogrammes'=>'required|numeric',
      'approved_degree_programmes'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $diploma = new AprrovedDegreeDiplomaPrograms_Model();
            $diploma->validated_diploma_programmes =$request->validated_diploma_programmes;
            $diploma->approved_private_university_degreeprogrammes=$request->approved_private_university_degreeprogrammes;
            $diploma->approved_degree_programmes=$request->approved_degree_programmes;
            $diploma->year=$request->year;
            $diploma->save();
             return response()->json($diploma);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($approved_id)
    {
       
         
         $diploma = AprrovedDegreeDiplomaPrograms_Model::findOrfail($approved_id);

  
          echo json_encode($diploma);     
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
        'validated_diploma_programmes'=>'required|numeric',
      'approved_private_university_degreeprogrammes'=>'required|numeric',
      'approved_degree_programmes'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $diploma =AprrovedDegreeDiplomaPrograms_Model::find($request->id);
            $diploma->validated_diploma_programmes =$request->validated_diploma_programmes;
            $diploma->approved_private_university_degreeprogrammes=$request->approved_private_university_degreeprogrammes;
            $diploma->approved_degree_programmes=$request->approved_degree_programmes;
            $diploma->year=$request->year;
            $diploma->save();
             return response()->json($diploma);
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
