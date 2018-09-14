<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_expenditure_cleaning_refuse_Model;
use View;

class environment_and_natural_resources_expenditure_cleaning_refuse extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'refuse_removal'=>'required|numeric',
    
 
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_expenditure_cleaning_refuse =environment_and_natural_resources_expenditure_cleaning_refuse_Model::all();
        
        return view('forms.environment.national.naturalresourcesexpenditurecleaningrefuse',['post' =>$environment_and_natural_resources_expenditure_cleaning_refuse]);
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
        'refuse_removal'=>'required|numeric',
  
     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $refuse = new  environment_and_natural_resources_expenditure_cleaning_refuse_Model();
            $refuse->refuse_removal =$request->refuse_removal;
            
            
            $refuse->year=$request->year;
            $refuse->save();
             return response()->json($refuse);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($development_id)
    {
       
         
         $refuse = environment_and_natural_resources_expenditure_cleaning_refuse_Model::findOrfail($development_id);

  
          echo json_encode($refuse);     
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
        'refuse_removal'=>'required|numeric',
     
     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $refuse= environment_and_natural_resources_expenditure_cleaning_refuse_Model::find($request->id);
            $refuse->refuse_removal=$request->refuse_removal;
        
           
            $refuse->year=$request->year;
            $refuse->save();
             return response()->json($refuse);
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
