<?php

namespace App\Http\Controllers\Forms\Tourism;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;

use App\Models\Tourism\tourism_population_proportion_that_took_trip_model;
use View;
use Illuminate\Support\Facades\DB;


//@Charles Ndirangu
//Tourism Population proportion that took the trip
class tourism_population_proportion_that_took_trip extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $rules = [
        
        'county_id'=>'required|numeric',
        'proportion'=>'required|numeric',
        'no_of_individuals'=>'required|numeric'
    ];
    public function index()
    {
         $pop = DB::table('tourism_population_proportion_that_took_trip')
               ->join('health_counties', 'tourism_population_proportion_that_took_trip.county_id', '=', 'health_counties.county_id')->orderBy('population_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.Tourism.county.tourism_population_proportion_that_took_trip', ['pops' =>$pop,'counties' =>$counties]);
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
        
        $validator = \Validator::make($request->all(),
            [
                'county_name'=>'required|numeric',
                'proportion'=>'required|numeric',
                'no_of_individuals'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $took_trip = new tourism_population_proportion_that_took_trip_model();
            $took_trip->county_id=$request->county_name;
            $took_trip->proportion=$request->proportion;
            $took_trip->no_of_individuals=$request->no_of_individuals;
            $took_trip->save();
             return response()->json($took_trip);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($population_id)
    {
        $took_trip = tourism_population_proportion_that_took_trip_model::findOrfail($population_id);
        echo json_encode($took_trip);
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
         $validator = \Validator::make($request->all(),
            [
                
                'county_name'=>'required|numeric',
                'proportion'=>'required|numeric',
                'no_of_individuals'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $took_trip =  tourism_population_proportion_that_took_trip_model::find($request->id);
            $took_trip->county_id=$request->county_name;
            $took_trip->proportion=$request->proportion;
            $took_trip->no_of_individuals=$request->no_of_individuals;
            $took_trip->save();
             return response()->json($took_trip);
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
