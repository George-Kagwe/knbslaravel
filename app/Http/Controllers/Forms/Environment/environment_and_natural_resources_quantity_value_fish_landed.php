<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_quantity_value_fish_landed_Model;
use View;

class environment_and_natural_resources_quantity_value_fish_landed extends Controller
{
    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'category'=>'required|alpha_dash',
      ' type'=>'required|alpha_dash', 
      'value'=>'required|numeric', 

    
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_quantity_value_fish_landed =environment_and_natural_resources_quantity_value_fish_landed_Model::all();
        
        return view('forms.environment.national.naturalresourcesquantityvaluefishlanded',['post' =>$environment_and_natural_resources_quantity_value_fish_landed]);
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
        'category'=>'required|alpha_dash',
      'type'=>'required|alpha_dash', 
      'value'=>'required|numeric', 
    
      'year'=>'required|numeric'
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $landed= new   environment_and_natural_resources_quantity_value_fish_landed_Model();
            $landed->category=$request->category;
            $landed->type=$request->type;
            $landed->value=$request->value;
            
            $landed->year=$request->year;
            $landed->save();
             return response()->json($landed);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($quantity_id)
    {
       
         
         $landed = environment_and_natural_resources_quantity_value_fish_landed_Model::findOrfail($quantity_id);

  
          echo json_encode($landed);     
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
       'category'=>'required|alpha_dash',
      'type'=>'required|alpha_dash', 
      'value'=>'required|numeric', 
    
      'year'=>'required|numeric'
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $landed=environment_and_natural_resources_quantity_value_fish_landed_Model::find($request->id);
            $landed->category=$request->category;
            $landed->type=$request->type;
            $landed->value=$request->value;
            
            $landed->year=$request->year;
            $landed->save();
             return response()->json($landed);
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
