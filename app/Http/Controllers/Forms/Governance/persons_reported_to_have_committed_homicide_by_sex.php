<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\persons_reported_to_have_committed_homicide_by_sex_model;
use View;

class persons_reported_to_have_committed_homicide_by_sex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



       protected $rules =
    [
      'offence'=>'required|alpha_dash',
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
         $persons_reported_to_have_committed_homicide_by_sex =persons_reported_to_have_committed_homicide_by_sex_model::all();
        
        return view('forms.governance.national.persons_reported_to_have_committed_homicide_by_sex',['post' =>
            $persons_reported_to_have_committed_homicide_by_sex]);
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
       'offence'=>'required|alpha_dash',
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $persons = new persons_reported_to_have_committed_homicide_by_sex_model();
            $persons->offence =$request->offence;
            $persons->male=$request->male;
            $persons->female=$request->female;
            $persons->year=$request->year;
            $persons->save();
             return response()->json($persons);
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
        

        $persons = persons_reported_to_have_committed_homicide_by_sex_model::findOrfail($convict_population);
        echo json_encode($persons);   


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
      'offence'=>'required|alpha_dash',
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $persons =persons_reported_to_have_committed_homicide_by_sex_model::find($request->id);

            $persons->offence =$request->offence;
            $persons->male=$request->male;
            $persons->female=$request->female;
            $persons->year=$request->year;
            $persons->save();
             return response()->json($persons);
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
