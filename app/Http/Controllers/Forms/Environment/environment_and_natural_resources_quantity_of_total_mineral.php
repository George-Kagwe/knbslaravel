<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_quantity_of_total_mineral_Model;
use View;


class environment_and_natural_resources_quantity_of_total_mineral extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'category'=>'required|alpha_dash',
      'description'=>'required|alpha_dash', 
      'amount'=>'required|numeric', 
    
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_quantity_of_total_mineral =environment_and_natural_resources_quantity_of_total_mineral_Model::all();
        
        return view('forms.environment.national.naturalresourcesquantityoftotalmineral',['post' =>$environment_and_natural_resources_quantity_of_total_mineral]);
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
      'description'=>'required|alpha_dash', 
      'amount'=>'required|numeric', 
    
      'year'=>'required|numeric'
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $mineral= new  environment_and_natural_resources_quantity_of_total_mineral_Model();
            $mineral->category=$request->category;
            $mineral->description=$request->description;
            $mineral->amount=$request->amount;
            
            $mineral->year=$request->year;
            $mineral->save();
             return response()->json($mineral);
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
       
         
         $mineral = environment_and_natural_resources_quantity_of_total_mineral_Model::findOrfail($quantity_id);

  
          echo json_encode($mineral);     
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
      'description'=>'required|alpha_dash', 
      'amount'=>'required|numeric', 
    
      'year'=>'required|numeric'
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $mineral=environment_and_natural_resources_quantity_of_total_mineral_Model::find($request->id);
            $mineral->category=$request->category;
            $mineral->description=$request->description;
            $mineral->amount=$request->amount;
            
            $mineral->year=$request->year;
            $mineral->save();
             return response()->json($mineral);
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
