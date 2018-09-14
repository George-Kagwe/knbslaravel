<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthFertilityByEducationStatus_Model;
use View;

class HealthFertilityByEducationStatus extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'fertility'=>'required|numeric',
      'education_status'=>'required|alpha',
      
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
          $HealthFertilityByEducationStatus =HealthFertilityByEducationStatus_Model::all();
        
        return view('Forms.health.national.healthfertilitybyeducationstatus',['post' =>$HealthFertilityByEducationStatus]);
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
        //
        $validator = \Validator::make($request->all(), [
        'fertility'=>'required|numeric',
      'education_status'=>'required|alpha',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $fertilityN = new HealthFertilityByEducationStatus_Model();
            $fertilityN->fertility =$request->fertility;
            $fertilityN->education_status=$request->education_status;
            
            $fertilityN->year=$request->year;
            $fertilityN->save();
             return response()->json($fertilityN);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($fertility_id)
    {
        //
              $fertilityN = HealthFertilityByEducationStatus_Model::findOrfail($fertility_id);

  
          echo json_encode($fertilityN);
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
        //
          $validator = \Validator::make($request->all(), [
         'fertility'=>'required|numeric',
      'education_status'=>'required|alpha',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $fertilityN=HealthFertilityByEducationStatus_Model::find($request->id);
            $fertilityN->fertility=$request->fertility;
            $fertilityN->education_status=$request->education_status;
            
            $fertilityN->year=$request->year;
            $fertilityN->save();
             return response()->json($fertilityN);
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
