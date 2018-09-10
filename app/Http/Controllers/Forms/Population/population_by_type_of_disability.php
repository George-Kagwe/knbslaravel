<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Population\population_by_type_of_disability_model;
use View;

//@Charles Ndirangu

class population_by_type_of_disability extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'disability'=>'required|max:255',
        'females'=>'required|numeric',
        'males'=>'required|numeric',
        'total_population'=>'required|numeric',
        
    ];
    public function index()
    {
         $pop_by_disability_type = population_by_type_of_disability_model::all();
        return view('Forms.Population.national.population_by_type_of_disability',['pop_by_dis_type' =>$pop_by_disability_type]);
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
                'disability'=>'required|max:255',
                'females'=>'required|numeric',
                'males'=>'required|numeric',
                'total_population'=>'required|numeric',
                
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $pop_by_disability_type = new population_by_type_of_disability_model();
            $pop_by_disability_type->disability=$request->disability;
            $pop_by_disability_type->females=$request->females;
            $pop_by_disability_type->males=$request->males;
            $pop_by_disability_type->total_population=$request->total_population;
            $pop_by_disability_type->save();
             return response()->json($pop_by_disability_type);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($disability_id)
    {
        $pop_by_disability_type = population_by_type_of_disability_model::findOrfail($disability_id);
        echo json_encode($pop_by_disability_type);
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
                'disability'=>'required|max:255',
                'females'=>'required|numeric',
                'males'=>'required|numeric',
                'total_population'=>'required|numeric',
                
            ]
        );
        
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $pop_by_disability_type =  population_by_type_of_disability_model::find($request->id);
            $pop_by_disability_type->disability=$request->disability;
            $pop_by_disability_type->females=$request->females;
            $pop_by_disability_type->males=$request->males;
            $pop_by_disability_type->total_population=$request->total_population;
            $pop_by_disability_type->save();
             return response()->json($pop_by_disability_type);
           echo json_encode(array("status" => TRUE));
        }
    }
    public function destroy($id)
    {
        //
    }
}
