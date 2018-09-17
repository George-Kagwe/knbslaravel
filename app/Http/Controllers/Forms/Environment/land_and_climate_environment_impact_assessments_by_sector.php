<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\land_and_climate_environment_impact_assessments_by_sector_Model;
use View;

class land_and_climate_environment_impact_assessments_by_sector extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'sector'=>'required|alpha_dash',
     
      'environmental_impact'=>'required|numeric',  
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $land_and_climate_environment_impact_assessments_by_sector = land_and_climate_environment_impact_assessments_by_sector_Model::all();
        
        return view('forms.environment.national.landandclimateenvironmentimpactassessmentsbysector',['post' =>$land_and_climate_environment_impact_assessments_by_sector]);
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
        'sector'=>'required|alpha_dash',
 
      'environmental_impact'=>'required|numeric',  
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $sector = new land_and_climate_environment_impact_assessments_by_sector_Model();
            $sector->sector =$request->sector;
         
              $sector->environmental_impact=$request->environmental_impact;
            $sector->year=$request->year;
            $sector->save();
             return response()->json($sector);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sector_id)
    {
       
         
         $sector =  land_and_climate_environment_impact_assessments_by_sector_Model::findOrfail($sector_id);

  
          echo json_encode($sector);     
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
       'sector'=>'required|alpha_dash',
     
      'environmental_impact'=>'required|numeric',  
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
           $sector=land_and_climate_environment_impact_assessments_by_sector_Model::find($request->id);
           $sector->sector =$request->sector;
            $sector->environmental_impact=$request->environmental_impact;
    
            $sector->year=$request->year;
            $sector->save();
             return response()->json($sector);
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
