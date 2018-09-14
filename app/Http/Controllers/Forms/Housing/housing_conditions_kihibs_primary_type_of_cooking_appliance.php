<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_primary_type_of_cooking_appliance_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_primary_type_of_cooking_appliance extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'stone_fire'=>'required',
                          'imp_stone_fire'=>'required|numeric',
                          'ordinary_jiko'=>'required|numeric',
                          'improved_jiko'=>'required|numeric',
                          'stove'=>'required|numeric',
                          'gas_cooker'=>'required|numeric',
                         'electric_cooker'=>'required|numeric',
                          'elec_gas_cooker'=>'required|numeric',
                       
                           'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_primary_type_of_cooking_appliance')
               ->join('health_counties', 'housing_conditions_kihibs_primary_type_of_cooking_appliance.county_id', '=', 'health_counties.county_id')
                ->orderBy('appliance_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_primary_type_of_cooking_appliance',
                 
                   ['post' =>$data,'counties' =>$counties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       

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
                          'county_id'=>'required',
                          'stone_fire'=>'required',
                          'imp_stone_fire'=>'required|numeric',
                          'ordinary_jiko'=>'required|numeric',
                          'improved_jiko'=>'required|numeric',
                          'stove'=>'required|numeric',
                          'gas_cooker'=>'required|numeric',
                         'electric_cooker'=>'required|numeric',
                          'elec_gas_cooker'=>'required|numeric',
                       
                           'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $cooking = new housing_conditions_kihibs_primary_type_of_cooking_appliance_model();
            $cooking->county_id =$request->county_id;
            $cooking->stone_fire=$request->stone_fire;
            $cooking->imp_stone_fire=$request->imp_stone_fire;         
            $cooking->ordinary_jiko=$request->ordinary_jiko;
            $cooking->improved_jiko=$request->improved_jiko;
            $cooking->stove=$request->stove;         
            $cooking->gas_cooker=$request->gas_cooker;
            $cooking->electric_cooker=$request->electric_cooker;
            $cooking->elec_gas_cooker=$request->elec_gas_cooker;
            $cooking->other=$request->other;       
            $cooking->not_stated=$request->not_stated;
            $cooking->households=$request->households;
         
         
            $cooking->save();
             return response()->json($cooking);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
          $cooking = housing_conditions_kihibs_primary_type_of_cooking_appliance_model::findOrfail($id);
     
      
         echo json_encode($cooking);
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
                           'county_id'=>'required',
                          'stone_fire'=>'required',
                          'imp_stone_fire'=>'required|numeric',
                          'ordinary_jiko'=>'required|numeric',
                          'improved_jiko'=>'required|numeric',
                          'stove'=>'required|numeric',
                          'gas_cooker'=>'required|numeric',
                         'electric_cooker'=>'required|numeric',
                         'elec_gas_cooker'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
           $cooking =housing_conditions_kihibs_primary_type_of_cooking_appliance_model::find($request->id);
           $cooking->county_id =$request->county_id;
           $cooking->stone_fire=$request->stone_fire;
           $cooking->imp_stone_fire=$request->imp_stone_fire;         
           $cooking->ordinary_jiko=$request->ordinary_jiko;
           $cooking->improved_jiko=$request->improved_jiko;
           $cooking->stove=$request->stove;         
           $cooking->gas_cooker=$request->gas_cooker;
           $cooking->electric_cooker=$request->electric_cooker;
           $cooking->elec_gas_cooker=$request->elec_gas_cooker;
           $cooking->other=$request->other;   
           $cooking->not_stated=$request->not_stated;
           $cooking->households=$request->households;                                    
        
            $cooking->save();
             return response()->json($cooking);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
