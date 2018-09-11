<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\convicted_prisoners_by_type_of_offence_and_sex_model;
use View;

class convicted_prisoners_by_type_of_offence_and_sex extends Controller
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
        
         $convicted_prisoners_by_type_of_offence_and_sex =convicted_prisoners_by_type_of_offence_and_sex_model::all();
        
        return view('forms.governance.national.convicted_prisoners_by_type_of_offence_and_sex',['post' =>
            $convicted_prisoners_by_type_of_offence_and_sex]);
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
            $convictions = new convicted_prisoners_by_type_of_offence_and_sex_model();
            $convictions->offence =$request->offence;
            $convictions->male=$request->male;
            $convictions->female=$request->female;
            $convictions->year=$request->year;
            $convictions->save();
             return response()->json($convictions);
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
        

        $convictions = convicted_prisoners_by_type_of_offence_and_sex_model::findOrfail($convict_population);
        echo json_encode($convictions);   


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
         
            $convictions =convicted_prisoners_by_type_of_offence_and_sex_model::find($request->id);

            $convictions->offence =$request->offence;
            $convictions->male=$request->male;
            $convictions->female=$request->female;
            $convictions->year=$request->year;
            $convictions->save();
             return response()->json($convictions);
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
