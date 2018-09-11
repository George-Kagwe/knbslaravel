<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\daily_average_population_of_prisoners_by_sex_model;
use View;

class daily_average_population_of_prisoners_by_sex extends Controller
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
        
         $daily_average_population_of_prisoners_by_sex =daily_average_population_of_prisoners_by_sex_model::all();
        
        return view('forms.governance.national.daily_average_population_of_prisoners_by_sex',['post' =>
            $daily_average_population_of_prisoners_by_sex]);
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
            $average = new daily_average_population_of_prisoners_by_sex_model();
            $average->category =$request->category;
            $average->male=$request->male;
            $average->female=$request->female;
            $average->year=$request->year;
            $average->save();
             return response()->json($average);
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
        

        $average = daily_average_population_of_prisoners_by_sex_model::findOrfail($convict_population);
        echo json_encode($average);   


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
         
            $average =daily_average_population_of_prisoners_by_sex_model::find($request->id);

            $average->category =$request->category;
            $average->male=$request->male;
            $average->female=$request->female;
            $average->year=$request->year;
            $average->save();
             return response()->json($average);
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
