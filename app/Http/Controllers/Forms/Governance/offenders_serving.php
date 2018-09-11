<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\offenders_serving_model;
use View;

class offenders_serving extends Controller
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
      'category'=>'required|alpha_dash',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
         $offenders_serving =offenders_serving_model::all();
        
        return view('forms.governance.national.offenders_serving',['post' =>
            $offenders_serving]);
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
      'category'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $offenders = new offenders_serving_model();
            $offenders->offence =$request->offence;
            $offenders->male=$request->male;
            $offenders->female=$request->female;
            $offenders->category =$request->category;
            $offenders->year=$request->year;
            $offenders->save();
             return response()->json($offenders);
           echo json_encode(array("status" => TRUE));

        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($offence_id)
    {
        

        $offenders = offenders_serving_model::findOrfail($offence_id);
        echo json_encode($offenders);   


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
       'category'=>'required|alpha_dash',
      'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $offenders =offenders_serving_model::find($request->id);
            $offenders->offence =$request->offence;
         
            $offenders->male=$request->male;
            $offenders->female=$request->female;
            $offenders->category =$request->category;
            $offenders->year=$request->year;
            $offenders->save();
             return response()->json($offenders);
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
