<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Population\population_households_type_floor_material_main_dwelling_unit_model;
use View;

//@Charles Ndirangu
 
class population_households_type_floor_material_main_dwelling_unit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'material'=>'required|max:255',
        'households'=>'required|numeric',
    ];
    public function index()
    {
         $pop_floor_material = population_households_type_floor_material_main_dwelling_unit_model::all();
        return view('Forms.Population.national.population_households_type_floor_material_main_dwelling_unit',['pop_floor_material' =>$pop_floor_material]);
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
                'material'=>'required|max:255',
                'households'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $pop_floor_material = new population_households_type_floor_material_main_dwelling_unit_model();
            $pop_floor_material->material=$request->material;
            $pop_floor_material->households=$request->households;
            $pop_floor_material->save();
             return response()->json($pop_floor_material);
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
         $pop_floor_material = population_households_type_floor_material_main_dwelling_unit_model::findOrfail($trade_id);
        echo json_encode($pop_floor_material);
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
                'material'=>'required|max:255',
                'households'=>'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $pop_floor_material =  population_households_type_floor_material_main_dwelling_unit_model::find($request->id);
                $pop_floor_material->material=$request->material;
                $pop_floor_material->households=$request->households;
                $pop_floor_material->save();
                return response()->json($pop_floor_material);
                echo json_encode(array("status" => TRUE));
        }
    }
    public function destroy($id)
    {
        //
    }
}
