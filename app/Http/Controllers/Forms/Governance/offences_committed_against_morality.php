<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\offences_committed_against_morality_model;
use View;

class offences_committed_against_morality extends Controller
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
        
         $offences_committed_against_morality =offences_committed_against_morality_model::all();
        
        return view('forms.governance.national.offences_committed_against_morality',['post' =>
            $offences_committed_against_morality]);
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
            $offences = new offences_committed_against_morality_model();
            $offences->category =$request->category;
            $offences->male=$request->male;
            $offences->female=$request->female;
            $offences->year=$request->year;
            $offences->save();
             return response()->json($offences);
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
        

        $offences = offences_committed_against_morality_model::findOrfail($category_id);
        echo json_encode($offences);   


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
         
            $offences =offences_committed_against_morality_model::find($request->id);

            $offences->category =$request->category;
            $offences->male=$request->male;
            $offences->female=$request->female;
            $offences->year=$request->year;
            $offences->save();
             return response()->json($offences);
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
