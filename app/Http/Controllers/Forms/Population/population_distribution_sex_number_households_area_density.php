<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response; 
use App\Models\Population\population_distribution_sex_number_households_area_density_model;
use View;
use Illuminate\Support\Facades\DB;

class population_distribution_sex_number_households_area_density extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
            'county_id'=>'required|numeric',
            'area_in_square_km'=>'required|numeric',
            'county_name'=>'required|max:255',
            'female'=>'required|numeric',
            'male'=>'required|numeric',
            'no_of_houseHolds'=>'required|numeric',
            'total_population'=>'required|numeric',
            'density'=>'required|numeric',

    ]; 

    public function index()
    {
        
        
        $pop_density = DB::table('population_distribution_sex_number_households_area_density')
               ->join('health_counties', 'population_distribution_sex_number_households_area_density.county_id', '=', 'health_counties.county_id')->orderBy('distribution_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.Population.county.population_distribution_sex_number_households_area_density', ['pop_density' =>$pop_density,'counties' =>$counties]);
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
                'area_in_square_km'=>'required|numeric',
                'county_name'=>'required|max:255',
                'female'=>'required|numeric',
                'male'=>'required|numeric',
                'no_of_houseHolds'=>'required|numeric',
                'total_population'=>'required|numeric',
                'density'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $pop_density = new population_distribution_sex_number_households_area_density_model();
            $pop_density->male=$request->male;
            $pop_density->female=$request->female;
            $pop_density->county_id=$request->county_name;
            $pop_density->county_name=$request->county_name;
            $pop_density->no_of_houseHolds=$request->no_of_houseHolds;
            $pop_density->total_population=$request->total_population;
            $pop_density->area_in_square_km=$request->area_in_square_km;
            $pop_density->density=$request->density;
            $pop_density->save();
             return response()->json($pop_density);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($distribution_id)
    {
        $pop_density = population_distribution_sex_number_households_area_density_model::findOrfail($distribution_id);
        echo json_encode($pop_density);
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
    {$validator = \Validator::make($request->all(),
            [
                'area_in_square_km'=>'required|numeric',
                'county_name'=>'required|max:255',
                'female'=>'required|numeric',
                'male'=>'required|numeric',
                'no_of_houseHolds'=>'required|numeric',
                'total_population'=>'required|numeric',
                'density'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $pop_density =  population_distribution_sex_number_households_area_density_model::find($request->id);
                 $pop_density->male=$request->male;
                $pop_density->female=$request->female;
                $pop_density->county_id=$request->county_name;
                $pop_density->no_of_houseHolds=$request->no_of_houseHolds;
                $pop_density->total_population=$request->total_population;
                $pop_density->area_in_square_km=$request->area_in_square_km;
                $pop_density->county_name=$request->county_name;
                $pop_density->density=$request->density;
                $pop_density->save();
                return response()->json($pop_density);
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
