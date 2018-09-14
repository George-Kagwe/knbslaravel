<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_water_purification_points_Model;
use View;

class environment_and_natural_resources_water_purification_points extends Controller
{
   
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'water_purification_points'=>'required|numeric',
      'boreholes_total'=>'required|numeric',
      'public'=>'required|numeric',
       
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_water_purification_points =environment_and_natural_resources_water_purification_points_Model::all();
        
        return view('forms.environment.national.naturalresourceswaterpurificationpoints',['post' =>$environment_and_natural_resources_water_purification_points]);
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
        'water_purification_points'=>'required|numeric',
      'boreholes_total'=>'required|numeric',  
       'public'=>'required|numeric',    
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $points = new environment_and_natural_resources_water_purification_points_Model();
            $points->water_purification_points =$request->water_purification_points;
            $points->boreholes_total=$request->boreholes_total;
            $points->public=$request->public;
            $points->year=$request->year;
            $points->save();
             return response()->json($points);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($water_id)
    {
       
         
         $points = environment_and_natural_resources_water_purification_points_Model::findOrfail($water_id);

  
          echo json_encode($points);     
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
        'water_purification_points'=>'required|numeric',
      'boreholes_total'=>'required|numeric',  
       'public'=>'required|numeric',    
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $points=environment_and_natural_resources_water_purification_points_Model::find($request->id);
             $points->water_purification_points=$request->water_purification_points;
            $points->boreholes_total=$request->boreholes_total;
            $points->public=$request->public;
            $points->year=$request->year;
            $points->save();
             return response()->json($points);
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
