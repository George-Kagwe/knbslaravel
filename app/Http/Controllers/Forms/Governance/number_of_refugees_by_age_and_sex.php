<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\number_of_refugees_by_age_and_sex_model;
use View;

class number_of_refugees_by_age_and_sex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



       protected $rules =
    [
      'children'=>'required|numeric',
      'adult'=>'required|numeric',
      'gender'=>'required|alpha_dash',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
         $number_of_refugees_by_age_and_sex =number_of_refugees_by_age_and_sex_model::all();
        
        return view('forms.governance.national.number_of_refugees_by_age_and_sex',['post' =>
            $number_of_refugees_by_age_and_sex]);
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
       'children'=>'required|numeric',
      'adult'=>'required|numeric',
      'gender'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $refugees = new number_of_refugees_by_age_and_sex_model();
            $refugees->children =$request->children;
            $refugees->adult=$request->adult;
            $refugees->gender=$request->gender;
            $refugees->year=$request->year;
            $refugees->save();
             return response()->json($refugees);
           echo json_encode(array("status" => TRUE));

        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($children_id)
    {
        

        $refugees = number_of_refugees_by_age_and_sex_model::findOrfail($children_id);
        echo json_encode($refugees);   


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
      'children'=>'required|numeric',
      'adult'=>'required|numeric',
      'gender'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $refugees =number_of_refugees_by_age_and_sex_model::find($request->id);

            $refugees->children =$request->children;
            $refugees->adult=$request->adult;
            $refugees->gender=$request->gender;
            $refugees->year=$request->year;
            $refugees->save();
             return response()->json($refugees);
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
