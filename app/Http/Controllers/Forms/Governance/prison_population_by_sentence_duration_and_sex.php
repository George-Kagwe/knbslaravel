<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\prison_population_by_sentence_duration_and_sex_model;
use View;

class prison_population_by_sentence_duration_and_sex extends Controller
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
        
         $prison_population_by_sentence_duration_and_sex =prison_population_by_sentence_duration_and_sex_model::all();
        
        return view('forms.governance.national.prison_population_by_sentence_duration_and_sex',['post' =>
            $prison_population_by_sentence_duration_and_sex]);
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
            $prisons = new prison_population_by_sentence_duration_and_sex_model();
            $prisons->category =$request->category;
            $prisons->male=$request->male;
            $prisons->female=$request->female;
            $prisons->year=$request->year;
            $prisons->save();
             return response()->json($prisons);
           echo json_encode(array("status" => TRUE));

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        

        $prisons = prison_population_by_sentence_duration_and_sex_model::findOrfail($category_id);
        echo json_encode($prisons);   


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
         
            $prisons =prison_population_by_sentence_duration_and_sex_model::find($request->id);

            $prisons->category =$request->category;
            $prisons->male=$request->male;
            $prisons->female=$request->female;
            $prisons->year=$request->year;
            $prisons->save();
             return response()->json($prisons);
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
