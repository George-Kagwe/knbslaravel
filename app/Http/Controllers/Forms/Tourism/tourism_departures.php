<?php

namespace App\Http\Controllers\Forms\Tourism;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Tourism\tourism_departures_model;
use View;

 
 
//@Charles Ndirangu
//@Tourist Departures
class tourism_departures extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    protected $rules = [
        'quarter'=>'required|max:255',
        'holiday'=>'required|numeric',
        'business'=>'required|numeric',
        'transit'=>'required|numeric',
        'other'=>'required|numeric',
        'year'=>'required|numeric'
    ];
 
    public function index() 
    {
        $tourism_departures = tourism_departures_model::all();
        return view('Forms.Tourism.national.tourism_departures',['departures' =>$tourism_departures]);
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
                'quarter'=>'required|max:255',
                'holiday'=>'required|numeric',
                'business'=>'required|numeric',
                'transit'=>'required|numeric',
                'other'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $arrivals = new tourism_departures_model();
            $arrivals->quarter =$request->quarter;
            $arrivals->holiday=$request->holiday;
            $arrivals->business=$request->business;
            $arrivals->transit=$request->transit;
            $arrivals->other=$request->other;
            $arrivals->year=$request->year;
            $arrivals->save();
             return response()->json($arrivals);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($departures_id)
    {
        $arrivals = tourism_departures_model::findOrfail($departures_id);
        echo json_encode($arrivals);
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
                'quarter'=>'required|max:255',
                'holiday'=>'required|numeric',
                'business'=>'required|numeric',
                'transit'=>'required|numeric',
                'other'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $departures =  tourism_departures_model::find($request->id);
            $departures->quarter =$request->quarter;
            $departures->holiday=$request->holiday;
            $departures->business=$request->business;
            $departures->transit=$request->transit;
            $departures->other=$request->other;
            $departures->year=$request->year;
            $departures->save();
             return response()->json($departures);
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
