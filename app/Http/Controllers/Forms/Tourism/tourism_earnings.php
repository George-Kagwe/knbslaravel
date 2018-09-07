<?php

namespace App\Http\Controllers\Forms\Tourism;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Tourism\tourism_earnings_model;
use View;
 
//@Charles Ndirangu
//Tourism Conference
class tourism_earnings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $rules = [
        
        'tourism_earnings_billions'=>'required|numeric',
        'year'=>'required|numeric'
    ];
    public function index()
    {
         $tourism_earnings = tourism_earnings_model::all();
        return view('Forms.Tourism.national.tourism_earnings',['earnings' =>$tourism_earnings]);
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
                'tourism_earnings_billions'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $earnings = new tourism_earnings_model();
            $earnings->tourism_earnings_billions=$request->tourism_earnings_billions;
            $earnings->year=$request->year;
            $earnings->save();
             return response()->json($earnings);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($earnings_id)
    {
        $earnings = tourism_earnings_model::findOrfail($earnings_id);
        echo json_encode($earnings);
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
                
                'tourism_earnings_billions'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $earnings =  tourism_earnings_model::find($request->id);
            $earnings->tourism_earnings_billions=$request->tourism_earnings_billions;
            $earnings->year=$request->year;
            $earnings->save();
             return response()->json($earnings);
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
