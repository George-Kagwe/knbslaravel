<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Population\population_by_sex_and_age_groups_model;
use View;

//@Charles Ndirangu
 
class population_by_sex_and_age_groups extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'female'=>'required|numeric',
        'male'=>'required|numeric',
        'total_population'=>'required|numeric',
        'age_group'=>'required|max:255'
    ];
    public function index()
    {
         $pop_by_sex_age_grp = population_by_sex_and_age_groups_model::all();
        return view('Forms.Population.national.population_by_sex_and_age_groups',['pop_by_sex' =>$pop_by_sex_age_grp]);
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
                'female'=>'required|numeric',
                'male'=>'required|numeric',
                'total_population'=>'required|numeric',
                'age_group'=>'required|max:255'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $pop_by_sex_age_grp = new population_by_sex_and_age_groups_model();
            $pop_by_sex_age_grp->female=$request->female;
            $pop_by_sex_age_grp->male=$request->male;
            $pop_by_sex_age_grp->total_population=$request->total_population;
            $pop_by_sex_age_grp->age_group=$request->age_group;
            $pop_by_sex_age_grp->save();
             return response()->json($pop_by_sex_age_grp);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($group_id)
    {
        $pop_by_sex_age_grp = population_by_sex_and_age_groups_model::findOrfail($group_id);
        echo json_encode($pop_by_sex_age_grp);
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
                'female'=>'required|numeric',
                'male'=>'required|numeric',
                'total_population'=>'required|numeric',
                'age_group'=>'required|max:255'
            ]
        );
        
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $pop_by_sex_age_grp =  population_by_sex_and_age_groups_model::find($request->id);
            $pop_by_sex_age_grp->female=$request->female;
            $pop_by_sex_age_grp->male=$request->male;
            $pop_by_sex_age_grp->total_population=$request->total_population;
            $pop_by_sex_age_grp->age_group=$request->age_group;
            $pop_by_sex_age_grp->save();
             return response()->json($pop_by_sex_age_grp);
           echo json_encode(array("status" => TRUE));
        }
    }
    public function destroy($id)
    {
        //
    }
}
