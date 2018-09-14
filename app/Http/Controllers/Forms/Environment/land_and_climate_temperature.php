<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Environment\land_and_climate_temperature_model;
use View;
use Illuminate\Support\Facades\DB;

class land_and_climate_temperature extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'temperature_id'=>'required',
                          'temp_celsius_degrees'=>'required|numeric',
                          'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('land_and_climate_temperature')
               ->join('health_counties', 'land_and_climate_temperature.county_id', '=', 'health_counties.county_id')
                ->join('land_and_climate_temperature_ids', 'land_and_climate_temperature.temperature_id', '=', 'land_and_climate_temperature_ids.temperature_id')
                ->orderBy('climate_temperature_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $temparature = DB::table('land_and_climate_temperature_ids')->get();

      
        return view('forms.environment.county.land_and_climate_temperature',
                 
                   ['post' =>$data,'counties' =>$counties,
                   'temparature' =>$temparature]);
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
                          'temperature_id'=>'required',
                          'temp_celsius_degrees'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $temp = new land_and_climate_temperature_model();
            $temp->county_id =$request->county_id;
            $temp->temperature_id=$request->temperature_id;
            $temp->temp_celsius_degrees=$request->temp_celsius_degrees;         
            $temp->year=$request->year;
            $temp->save();
             return response()->json($temp);
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
      
          $temp = land_and_climate_temperature_model::findOrfail($id);
     
      
         echo json_encode($temp);
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
                          'temperature_id'=>'required',
                          'temp_celsius_degrees'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $temp =land_and_climate_temperature_model::find($request->id);
            $temp->county_id =$request->county_id;
            $temp->temperature_id=$request->temperature_id;
            $temp->temp_celsius_degrees=$request->temp_celsius_degrees;         
            $temp->year=$request->year;
            $temp->save();
             return response()->json($temp);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_subcounties($id)
    {
         $subcounties = DB::table('land_and_climate_temperature_ids')
               ->where('temperature_id',  '=', $id)               
                ->get();

        return  json_encode($subcounties);
    }
}
