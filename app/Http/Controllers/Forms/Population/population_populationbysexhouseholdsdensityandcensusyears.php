<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Population\population_populationbysexhouseholdsdensityandcensusyears_model;
use View;

class population_populationbysexhouseholdsdensityandcensusyears extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'male'=>'required|numeric',
        'female'=>'required|numeric',
        'total'=>'required|numeric',
        'hhs'=>'required|numeric',
        'av_hh_size'=>'required|numeric',
        'approx_area'=>'required|numeric',
        'density'=>'required|numeric',
        'census_year'=>'required|numeric',
    ];

    public function index()
    {
        
         $pop_density_by_census = population_populationbysexhouseholdsdensityandcensusyears_model::all();
        return view('Forms.Population.national.population_populationbysexhouseholdsdensityandcensusyears',['pop_density_by_census' =>$pop_density_by_census]);
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
                'male'=>'required|numeric',
                'female'=>'required|numeric',
                'total'=>'required|numeric',
                'hhs'=>'required|numeric',
                'av_hh_size'=>'required|numeric',
                'approx_area'=>'required|numeric',
                'density'=>'required|numeric',
                'census_year'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $pop_density_by_census = new population_populationbysexhouseholdsdensityandcensusyears_model();
            $pop_density_by_census->male=$request->male;
            $pop_density_by_census->female=$request->female;
            $pop_density_by_census->total=$request->total;
            $pop_density_by_census->hhs=$request->hhs;
            $pop_density_by_census->av_hh_size=$request->av_hh_size;
            $pop_density_by_census->approx_area=$request->approx_area;
            $pop_density_by_census->density=$request->density;
            $pop_density_by_census->census_year=$request->census_year;
            $pop_density_by_census->save();
             return response()->json($pop_density_by_census);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($census_population_id)
    {
        $pop_density_by_census = population_populationbysexhouseholdsdensityandcensusyears_model::findOrfail($census_population_id);
        echo json_encode($pop_density_by_census);
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
                'male'=>'required|numeric',
                'female'=>'required|numeric',
                'total'=>'required|numeric',
                'hhs'=>'required|numeric',
                'av_hh_size'=>'required|numeric',
                'approx_area'=>'required|numeric',
                'density'=>'required|numeric',
                'census_year'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $pop_density_by_census =  population_populationbysexhouseholdsdensityandcensusyears_model::find($request->id);
                $pop_density_by_census->male=$request->male;
                $pop_density_by_census->female=$request->female;
                $pop_density_by_census->total=$request->total;
                $pop_density_by_census->hhs=$request->hhs;
                $pop_density_by_census->av_hh_size=$request->av_hh_size;
                $pop_density_by_census->approx_area=$request->approx_area;
                $pop_density_by_census->density=$request->density;
                $pop_density_by_census->census_year=$request->census_year;
                $pop_density_by_census->save();
                return response()->json($pop_density_by_census);
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
