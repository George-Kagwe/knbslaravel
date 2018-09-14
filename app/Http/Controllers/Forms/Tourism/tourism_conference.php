<?php

namespace App\Http\Controllers\Forms\Tourism;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Tourism\tourism_conference_model;
use View;

//@Charles Ndirangu
//Tourism Conference
class tourism_conference extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $rules = [
        'category'=>'required|max:255',
        'number_of_conferences'=>'required|numeric',
        'number_of_delegates'=>'required|numeric',
        'year'=>'required|numeric'
    ];
    public function index()
    {
         $tourism_conference = tourism_conference_model::all();
        return view('Forms.Tourism.national.tourism_conference',['conferences' =>$tourism_conference]);
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
                'category'=>'required|max:255',
                'number_of_conferences'=>'required|numeric',
                'number_of_delegates'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $conferences = new tourism_conference_model();
            $conferences->category =$request->category;
            $conferences->number_of_conferences=$request->number_of_conferences;
            $conferences->number_of_delegates=$request->number_of_delegates;
            $conferences->year=$request->year;
            $conferences->save();
             return response()->json($conferences);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($conference_id)
    {
        $conferences = tourism_conference_model::findOrfail($conference_id);
        echo json_encode($conferences);
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
                'category'=>'required|max:255',
                'number_of_conferences'=>'required|numeric',
                'number_of_delegates'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $conferences =  tourism_conference_model::find($request->id);
            $conferences->category =$request->category;
            $conferences->number_of_conferences=$request->number_of_conferences;
            $conferences->number_of_delegates=$request->number_of_delegates;
            $conferences->year=$request->year;
            $conferences->save();
             return response()->json($conferences);
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
