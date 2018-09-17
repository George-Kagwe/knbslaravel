<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_value_of_total_mineral_Model;
use View;


class environment_and_natural_resources_value_of_total_mineral extends Controller
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
        
        $environment_and_natural_resources_value_of_total_mineral =environment_and_natural_resources_value_of_total_mineral_Model::all();
        
        return view('forms.environment.national.naturalresourcesvalueoftotalmineral',['post' =>$environment_and_natural_resources_value_of_total_mineral]);
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
            $totalmineral= new environment_and_natural_resources_value_of_total_mineral_Model();
            $totalmineral->category=$request->category;
            $totalmineral->description=$request->description;
            $totalmineral->amount=$request->amount;
            
            $totalmineral->year=$request->year;
            $totalmineral->save();
             return response()->json($totalmineral);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($value_id)
    {
       
         
         $totalmineral =environment_and_natural_resources_value_of_total_mineral_Model::findOrfail($value_id);

  
          echo json_encode($totalmineral);     
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
         
            $totalmineral= environment_and_natural_resources_value_of_total_mineral_Model::find($request->id);
            $totalmineral->category=$request->category;
            $totalmineral->description=$request->description;
            $totalmineral->amount=$request->amount;
            
            $totalmineral->year=$request->year;
            $totalmineral->save();
             return response()->json($totalmineral);
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
