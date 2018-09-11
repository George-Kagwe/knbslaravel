<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Population\population_households_by_main_source_of_water_model;
use View;

//@Charles Ndirangu

class population_households_by_main_source_of_water extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'source'=>'required|max:255',
        'total'=>'required|numeric',
    ];
    public function index()
    {
         $pop_water_source = population_households_by_main_source_of_water_model::all();
        return view('Forms.Population.national.population_households_by_main_source_of_water',['pop_water_source' =>$pop_water_source]);
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
                'source'=>'required|max:255',
                'total'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $pop_water_source = new population_households_by_main_source_of_water_model();
            $pop_water_source->source=$request->source;
            $pop_water_source->total=$request->total;
            $pop_water_source->save();
             return response()->json($pop_water_source);
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
         $pop_water_source = population_households_by_main_source_of_water_model::findOrfail($trade_id);
        echo json_encode($pop_water_source);
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
                'source'=>'required|max:255',
                'total'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $pop_water_source =  population_households_by_main_source_of_water_model::find($request->id);
                $pop_water_source->source=$request->source;
                $pop_water_source->total=$request->total;
                $pop_water_source->save();
                return response()->json($pop_water_source);
                echo json_encode(array("status" => TRUE));
        }
    }
    public function destroy($id)
    {
        //
    }
}
