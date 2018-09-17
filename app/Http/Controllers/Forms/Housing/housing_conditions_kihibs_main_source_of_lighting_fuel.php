<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_main_source_of_lighting_fuel_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_main_source_of_lighting_fuel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'electricity'=>'required',
                          'generator'=>'required|numeric',
                          'solar_energy'=>'required|numeric',
                          'paraffin_lantern'=>'required|numeric',
                          'paraffin_tin_lamp'=>'required|numeric',
                          'paraffin_pressure_lamp'=>'required|numeric',
                         'fuel_wood'=>'required|numeric',
                          'gas_lamp'=>'required|numeric',
                          'battery_lamp'=>'required|numeric',
                           'candles'=>'required|numeric',
                            'biogas'=>'required|numeric',
                           
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_main_source_of_lighting_fuel')
               ->join('health_counties', 'housing_conditions_kihibs_main_source_of_lighting_fuel.county_id', '=', 'health_counties.county_id')
                ->orderBy('source_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_main_source_of_lighting_fuel',
                 
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
                          'electricity'=>'required',
                          'generator'=>'required|numeric',
                          'solar_energy'=>'required|numeric',
                          'paraffin_lantern'=>'required|numeric',
                          'paraffin_tin_lamp'=>'required|numeric',
                          'paraffin_pressure_lamp'=>'required|numeric',
                         'fuel_wood'=>'required|numeric',
                          'gas_lamp'=>'required|numeric',
                          'battery_lamp'=>'required|numeric',
                           'candles'=>'required|numeric',
                            'biogas'=>'required|numeric',
                           
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $lighting = new housing_conditions_kihibs_main_source_of_lighting_fuel_model();
            $lighting->county_id =$request->county_id;
            $lighting->electricity=$request->electricity;
            $lighting->generator=$request->generator;         
            $lighting->solar_energy=$request->solar_energy;

            $lighting->paraffin_lantern=$request->paraffin_lantern;
            $lighting->paraffin_tin_lamp=$request->paraffin_tin_lamp;         
            $lighting->paraffin_pressure_lamp=$request->paraffin_pressure_lamp;

            $lighting->fuel_wood=$request->fuel_wood;
           $lighting->gas_lamp=$request->gas_lamp;
           $lighting->battery_lamp=$request->battery_lamp;
           $lighting->candles=$request->candles;
           $lighting->biogas=$request->biogas;
       
            $lighting->other=$request->other;         
            $lighting->not_stated=$request->not_stated;

            $lighting->households=$request->households;
         
         
            $lighting->save();
             return response()->json($lighting);
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
      
          $lighting = housing_conditions_kihibs_main_source_of_lighting_fuel_model::findOrfail($id);
     
      
         echo json_encode($lighting);
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
                          'electricity'=>'required',
                          'generator'=>'required|numeric',
                          'solar_energy'=>'required|numeric',
                          'paraffin_lantern'=>'required|numeric',
                          'paraffin_tin_lamp'=>'required|numeric',
                          'paraffin_pressure_lamp'=>'required|numeric',
                         'fuel_wood'=>'required|numeric',
                                'gas_lamp'=>'required|numeric',
                          'battery_lamp'=>'required|numeric',
                           'candles'=>'required|numeric',
                            'biogas'=>'required|numeric',
                           
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
            $lighting =housing_conditions_kihibs_main_source_of_lighting_fuel_model::find($request->id);
            $lighting->county_id =$request->county_id;
            $lighting->electricity=$request->electricity;
            $lighting->generator=$request->generator;         
            $lighting->solar_energy=$request->solar_energy;

            $lighting->paraffin_lantern=$request->paraffin_lantern;
            $lighting->paraffin_tin_lamp=$request->paraffin_tin_lamp;         
            $lighting->paraffin_pressure_lamp=$request->paraffin_pressure_lamp;

           $lighting->fuel_wood=$request->fuel_wood;
           $lighting->gas_lamp=$request->gas_lamp;
           $lighting->battery_lamp=$request->battery_lamp;
           $lighting->candles=$request->candles;
           $lighting->biogas=$request->biogas;
       
            $lighting->other=$request->other;         
            $lighting->not_stated=$request->not_stated;

            $lighting->households=$request->households;                                    
        
            $lighting->save();
             return response()->json($lighting);
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
