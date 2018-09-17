<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_num_high_risk_environ_impact_Model;
use View; 

class environment_and_natural_resources_num_high_risk_environ_impact extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'transport_and_communication'=>'required|numeric',
      'energy'=>'required|numeric',
      'tourism'=>'required|numeric',
      'mining_and_quarrying'=>'required|numeric',
      'human_settlements_and_Infrastructure'=>'required|numeric',
      'agriculture_and_forestry'=>'required|numeric',
      'commerce_and_industry'=>'required|numeric',
      'water_resources'=>'required|numeric',
      
 
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_num_high_risk_environ_impact =environment_and_natural_resources_num_high_risk_environ_impact_Model::all();
        
        return view('forms.environment.national.naturalresourcesnumhighriskenvironimpact',['post' =>$environment_and_natural_resources_num_high_risk_environ_impact]);
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
        'transport_and_communication'=>'required|numeric',
      'energy'=>'required|numeric',
      'tourism'=>'required|numeric',
      'mining_and_quarrying'=>'required|numeric',
      'human_settlements_and_Infrastructure'=>'required|numeric',
      'agriculture_and_forestry'=>'required|numeric',
      'commerce_and_industry'=>'required|numeric',
      'water_resources'=>'required|numeric',
      
 
      'year'=>'required|numeric'
                              
                        
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $impact = new environment_and_natural_resources_num_high_risk_environ_impact_Model();
            $impact->transport_and_communication =$request->transport_and_communication;

            $impact->energy=$request->energy;
             $impact->tourism=$request->tourism;
              $impact->mining_and_quarrying=$request->mining_and_quarrying;
               $impact->human_settlements_and_Infrastructure=$request->human_settlements_and_Infrastructure;
                $impact->agriculture_and_forestry=$request->agriculture_and_forestry;
                 $impact->commerce_and_industry=$request->commerce_and_industry;
              $impact->water_resources=$request->water_resources;
            
            $impact->year=$request->year;
            $impact->save();
             return response()->json($impact);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($risk_id)
    {
       
         
         $impact = environment_and_natural_resources_num_high_risk_environ_impact_Model::findOrfail($risk_id);

  
          echo json_encode($impact);     
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
        'transport_and_communication'=>'required|numeric',
      'energy'=>'required|numeric',
      'tourism'=>'required|numeric',
      'mining_and_quarrying'=>'required|numeric',
      'human_settlements_and_Infrastructure'=>'required|numeric',
      'agriculture_and_forestry'=>'required|numeric',
      'commerce_and_industry'=>'required|numeric',
      'water_resources'=>'required|numeric',
      
 
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $impact=environment_and_natural_resources_num_high_risk_environ_impact_Model::find($request->id);
            $impact->transport_and_communication =$request->transport_and_communication;

            $impact->energy=$request->energy;
             $impact->tourism=$request->tourism;
              $impact->mining_and_quarrying=$request->mining_and_quarrying;
               $impact->human_settlements_and_Infrastructure=$request->human_settlements_and_Infrastructure;
                $impact->agriculture_and_forestry=$request->agriculture_and_forestry;
                 $impact->commerce_and_industry=$request->commerce_and_industry;
              $impact->water_resources=$request->water_resources;
            
            $impact->year=$request->year;
            $impact->save();
             return response()->json($impact);
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
