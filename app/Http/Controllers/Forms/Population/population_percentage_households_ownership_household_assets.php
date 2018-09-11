<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Population\population_percentage_households_ownership_household_assets_model;
use View;

//@Charles Ndirangu
 
 
class population_percentage_households_ownership_household_assets extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'asset'=>'required|max:255',
        'percentage'=>'required|numeric',
    ];
    public function index()
    {
         $pop_hse_percentage = population_percentage_households_ownership_household_assets_model::all();
        return view('Forms.Population.national.population_percentage_households_ownership_household_assets',['pop_hse_percentage' =>$pop_hse_percentage]);
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
                'asset'=>'required|max:255',
                'percentage'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $pop_hse_percentage = new population_percentage_households_ownership_household_assets_model();
            $pop_hse_percentage->asset=$request->asset;
            $pop_hse_percentage->percentage=$request->percentage;
            $pop_hse_percentage->save();
             return response()->json($pop_hse_percentage);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($trade_id)
    {
         $pop_hse_percentage = population_percentage_households_ownership_household_assets_model::findOrfail($trade_id);
        echo json_encode($pop_hse_percentage);
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
                'asset'=>'required|max:255',
                'percentage'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $pop_hse_percentage =  population_percentage_households_ownership_household_assets_model::find($request->id);
                $pop_hse_percentage->asset=$request->asset;
                $pop_hse_percentage->percentage=$request->percentage;
                $pop_hse_percentage->save();
                return response()->json($pop_hse_percentage);
                echo json_encode(array("status" => TRUE));
        }
    }
    public function destroy($id)
    {
        //
    }
}
