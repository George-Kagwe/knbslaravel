<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Population\population_by_sex_and_school_attendance_model;
use View;

//@Charles Ndirangu
 

class population_by_sex_and_school_attendance extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'education_level'=>'required|max:255',
        'female'=>'required|numeric',
        'male'=>'required|numeric',
        'total_population'=>'required|numeric',
        
    ];
    public function index()
    {
         $pop_by_sex_attendance = population_by_sex_and_school_attendance_model::all();
        return view('Forms.Population.national.population_by_sex_and_school_attendance',['pop_by_sex_att' =>$pop_by_sex_attendance]);
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
                'education_level'=>'required|max:255',
                'female'=>'required|numeric',
                'male'=>'required|numeric',
                'total_population'=>'required|numeric',
                
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $pop_by_sex_attendance = new population_by_sex_and_school_attendance_model();
            $pop_by_sex_attendance->education_level=$request->education_level;
            $pop_by_sex_attendance->female=$request->female;
            $pop_by_sex_attendance->male=$request->male;
            $pop_by_sex_attendance->total_population=$request->total_population;
            $pop_by_sex_attendance->save();
             return response()->json($pop_by_sex_attendance);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($attendance_id)
    {
        $pop_by_sex_attendance = population_by_sex_and_school_attendance_model::findOrfail($attendance_id);
        echo json_encode($pop_by_sex_attendance);
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
                'education_level'=>'required|max:255',
                'female'=>'required|numeric',
                'male'=>'required|numeric',
                'total_population'=>'required|numeric',
                
            ]
        );
        
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $pop_by_sex_attendance =  population_by_sex_and_school_attendance_model::find($request->id);
            $pop_by_sex_attendance->education_level=$request->education_level;
            $pop_by_sex_attendance->female=$request->female;
            $pop_by_sex_attendance->male=$request->male;
            $pop_by_sex_attendance->total_population=$request->total_population;
            $pop_by_sex_attendance->save();
             return response()->json($pop_by_sex_attendance);
           echo json_encode(array("status" => TRUE));
        }
    }
    public function destroy($id)
    {
        //
    }
}
