<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_trends_envi_natural_resources_Model;
use View;


class environment_and_natural_resources_trends_envi_natural_resources extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'forestry_and_logging'=>'required|numeric',
      'fishing_and_aquaculture'=>'required|numeric', 
      'mining_and_quarrying'=>'required|numeric',
      'water_supply'=>'required|numeric', 
      'GDP_at_current_prices'=>'required|numeric',
      'resource_as_percent_of_GDP'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_trends_envi_natural_resources = environment_and_natural_resources_trends_envi_natural_resources_Model::all();
        
        return view('forms.environment.national.naturalresourcestrendsenvinaturalresources',['post' =>$environment_and_natural_resources_trends_envi_natural_resources]);
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
       'forestry_and_logging'=>'required|numeric',
      'fishing_and_aquaculture'=>'required|numeric', 
      'mining_and_quarrying'=>'required|numeric',
      'water_supply'=>'required|numeric', 
      'GDP_at_current_prices'=>'required|numeric',
      'resource_as_percent_of_GDP'=>'required|numeric',
      'year'=>'required|numeric'
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $resources = new  environment_and_natural_resources_trends_envi_natural_resources_Model();
            $resources->forestry_and_logging =$request->forestry_and_logging;
            $resources->fishing_and_aquaculture=$request->fishing_and_aquaculture;

             $resources->mining_and_quarrying =$request->mining_and_quarrying;
            $resources->water_supply=$request->water_supply;
             $resources->GDP_at_current_prices =$request->GDP_at_current_prices;
            $resources->resource_as_percent_of_GDP=$request->resource_as_percent_of_GDP;
            
            $resources->year=$request->year;
            $resources->save();
             return response()->json($resources);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($trend_id)
    {
       
         
         $resources =  environment_and_natural_resources_trends_envi_natural_resources_Model::findOrfail($trend_id);

  
          echo json_encode($resources);     
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
       'forestry_and_logging'=>'required|numeric',
      'fishing_and_aquaculture'=>'required|numeric', 
      'mining_and_quarrying'=>'required|numeric',
      'water_supply'=>'required|numeric', 
      'GDP_at_current_prices'=>'required|numeric',
      'resource_as_percent_of_GDP'=>'required|numeric',
      'year'=>'required|numeric'
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $resources=environment_and_natural_resources_trends_envi_natural_resources_Model::find($request->id);
           $resources->forestry_and_logging =$request->forestry_and_logging;
            $resources->fishing_and_aquaculture=$request->fishing_and_aquaculture;

             $resources->mining_and_quarrying =$request->mining_and_quarrying;
            $resources->water_supply=$request->water_supply;
             $resources->GDP_at_current_prices =$request->GDP_at_current_prices;
            $resources->resource_as_percent_of_GDP=$request->resource_as_percent_of_GDP;
            
            $resources->year=$request->year;
            $resources->save();
             return response()->json($resources);
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
