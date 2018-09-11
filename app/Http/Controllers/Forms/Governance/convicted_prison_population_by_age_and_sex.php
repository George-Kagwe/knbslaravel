<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\convicted_prison_population_by_age_and_sex_model;
use View;

class convicted_prison_population_by_age_and_sex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



       protected $rules =
    [
      'category'=>'required|alpha_dash',
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
         $convicted_prison_population_by_age_and_sex =convicted_prison_population_by_age_and_sex_model::all();
        
        return view('forms.governance.national.convicted_prison_population_by_age_and_sex',['post' =>
            $convicted_prison_population_by_age_and_sex]);
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
    

       $validator = \Validator::make($request->all(), [
       'category'=>'required|alpha_dash',
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $population = new convicted_prison_population_by_age_and_sex_model();
            $population->category =$request->category;
            $population->male=$request->male;
            $population->female=$request->female;
            $population->year=$request->year;
            $population->save();
             return response()->json($population);
           echo json_encode(array("status" => TRUE));

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($convict_population)
    {
        

        $population = convicted_prison_population_by_age_and_sex_model::findOrfail($convict_population);
        echo json_encode($population);   


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
      'category'=>'required|alpha_dash',
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $population =convicted_prison_population_by_age_and_sex_model::find($request->id);

            $population->category =$request->category;
            $population->male=$request->male;
            $population->female=$request->female;
            $population->year=$request->year;
            $population->save();
             return response()->json($population);
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
