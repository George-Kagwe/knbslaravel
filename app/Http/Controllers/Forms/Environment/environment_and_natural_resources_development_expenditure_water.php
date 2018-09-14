<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_development_expenditure_water_Model;
use View;

class environment_and_natural_resources_development_expenditure_water extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'water_development'=>'required|numeric',
      'training_of_water_development_staff'=>'required|numeric',

      'rural_water_supplies'=>'required|numeric',
      'miscellaneous_and_special_water_programmes'=>'required|numeric',
      'national_water_conservation_and_pipeline_corporation '=>'required|numeric',
      'irrigation_development'=>'required|numeric',

      'national_irrigation_board'=>'required|numeric',
 
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_development_expenditure_water =environment_and_natural_resources_development_expenditure_water_Model::all();
        
        return view('forms.environment.national.naturalresourcesdevelopmentexpenditurewater',['post' =>$environment_and_natural_resources_development_expenditure_water]);
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
        'water_development'=>'required|numeric',
      'training_of_water_development_staff'=>'required|numeric',

      'rural_water_supplies'=>'required|numeric',
      'miscellaneous_and_special_water_programmes'=>'required|numeric',
      'national_water_conservation_and_pipeline_corporation'=>'required|numeric',
      'irrigation_development'=>'required|numeric',

      'national_irrigation_board'=>'required|numeric',
 
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $water = new environment_and_natural_resources_development_expenditure_water_Model();

            $water->water_development =$request->water_development;

            $water->training_of_water_development_staff=$request->training_of_water_development_staff;

             $water->rural_water_supplies=$request->rural_water_supplies;

              $water->miscellaneous_and_special_water_programmes=$request->miscellaneous_and_special_water_programmes;

               $water->national_water_conservation_and_pipeline_corporation=$request->national_water_conservation_and_pipeline_corporation;

                $water->irrigation_development=$request->irrigation_development;
            $water->national_irrigation_board=$request->national_irrigation_board;
            
            $water->year=$request->year;
            $water->save();
             return response()->json($water);
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
       
         
         $water = environment_and_natural_resources_development_expenditure_water_Model::findOrfail($development_id);

  
          echo json_encode($water);     
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
        'water_development'=>'required|numeric',
      'training_of_water_development_staff'=>'required|numeric',

      'rural_water_supplies'=>'required|numeric',
      'miscellaneous_and_special_water_programmes'=>'required|numeric',
      'national_water_conservation_and_pipeline_corporation'=>'required|numeric',
      'irrigation_development'=>'required|numeric',
      'national_irrigation_board'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $water=environment_and_natural_resources_development_expenditure_water_Model::find($request->id);
            $water->water_development =$request->water_development;

            $water->training_of_water_development_staff=$request->training_of_water_development_staff;

             $water->rural_water_supplies=$request->rural_water_supplies;
              $water->miscellaneous_and_special_water_programmes=$request->miscellaneous_and_special_water_programmes;

               $water->national_water_conservation_and_pipeline_corporation=$request->national_water_conservation_and_pipeline_corporation;

                $water->irrigation_development=$request->irrigation_development;
            $water->national_irrigation_board=$request->national_irrigation_board;
            
            $water->year=$request->year;
            $water->save();
             return response()->json($water);
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
