<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthEarlyChildhoodMortalityRatesBySex_Model;
use View;
class HealthEarlyChildhoodMortalityRatesBySex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'mortality_rate'=>'required|numeric',
      'status'=>'required|alpha',
      'gender'=>'required|alpha',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
           $HealthEarlyChildhoodMortalityRatesBySex =HealthEarlyChildhoodMortalityRatesBySex_Model::all();
        
        return view('Forms.health.national.healthearlychildhoodmortalityratesbysex',['post' =>$HealthEarlyChildhoodMortalityRatesBySex]);
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
        //
           $validator = \Validator::make($request->all(), [
        'mortality_rate'=>'required|numeric',
      'status'=>'required|alpha',
      'gender'=>'required|alpha',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $rate = new HealthEarlyChildhoodMortalityRatesBySex_Model();
            $rate->mortality_rate =$request->mortality_rate;
            $rate->status=$request->status;
            $rate->gender=$request->gender;
            $rate->year=$request->year;
            $rate->save();
             return response()->json($rate);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rate_id)
    {
        //
         $rate = HealthEarlyChildhoodMortalityRatesBySex_Model::findOrfail($rate_id);

  
          echo json_encode($rate);
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
        //
         $validator = \Validator::make($request->all(), [
         'mortality_rate'=>'required|numeric',
      'status'=>'required|alpha',
      'gender'=>'required|alpha',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $rate=HealthEarlyChildhoodMortalityRatesBySex_Model::find($request->id);
            $rate->mortality_rate=$request->mortality_rate;
            $rate->status=$request->status;
            $rate->gender=$request->gender;
            $rate->year=$request->year;
            $rate->save();
             return response()->json($rate);
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
