<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\ land_and_climate_trends_in_environment_and_natural_resources_Model;
use View;

class land_and_climate_trends_in_environment_and_natural_resources extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'industry'=>'required|alpha_dash',
     
      'value_added'=>'required|numeric',  
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $land_and_climate_trends_in_environment_and_natural_resources = land_and_climate_trends_in_environment_and_natural_resources_Model::all();
        
        return view('forms.environment.national.landandclimatetrendsinenvironmentandnaturalresources',['post' =>$land_and_climate_trends_in_environment_and_natural_resources]);
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
        'industry'=>'required|alpha_dash',
 
      'value_added'=>'required|numeric',  
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $resources = new land_and_climate_trends_in_environment_and_natural_resources_Model();
            $resources->industry=$request->industry;
         
              $resources->value_added=$request->value_added;
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
    public function show($industry_id)
    {
       
         
         $resources =  land_and_climate_trends_in_environment_and_natural_resources_Model::findOrfail($industry_id);

  
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
       'industry'=>'required|alpha_dash',
     
      'value_added'=>'required|numeric',  
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
           $resources= land_and_climate_trends_in_environment_and_natural_resources_Model::find($request->id);
           $resources->industry =$request->industry;
            $resources->value_added=$request->value_added;
    
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
