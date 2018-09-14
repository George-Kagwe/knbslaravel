<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_government_forest_Model;
use View; 
class environment_and_natural_resources_government_forest extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'previous_plantation_area '=>'required|numeric',
      'area_planted'=>'required|numeric',
      'area_clear_felled'=>'required|numeric',
 
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_government_forest =environment_and_natural_resources_government_forest_Model::all();
        
        return view('forms.environment.national.naturalresourcesgovernmentforest',['post' =>$environment_and_natural_resources_government_forest]);
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
        'previous_plantation_area'=>'required|numeric',
        'area_planted'=>'required|numeric',
        'area_clear_felled'=>'required|numeric',
     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $forest = new environment_and_natural_resources_government_forest_Model();
            $forest->previous_plantation_area =$request->previous_plantation_area;

            $forest->area_planted=$request->area_planted;
             $forest->area_clear_felled=$request->area_clear_felled;
            
            $forest->year=$request->year;
            $forest->save();
             return response()->json($forest);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($govt_id)
    {
       
         
         $forest = environment_and_natural_resources_government_forest_Model::findOrfail($govt_id);

  
          echo json_encode($forest);     
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
        'previous_plantation_area'=>'required|numeric',
      'area_planted'=>'required|numeric',
      'area_clear_felled'=>'required|numeric',
     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $forest=environment_and_natural_resources_government_forest_Model::find($request->id);
            $forest->previous_plantation_area=$request->previous_plantation_area;
            $forest->area_planted=$request->area_planted;
             $forest->area_clear_felled=$request->area_clear_felled;
           
            $forest->year=$request->year;
            $forest->save();
             return response()->json($forest);
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
