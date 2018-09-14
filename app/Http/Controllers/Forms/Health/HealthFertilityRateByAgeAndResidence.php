<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthFertilityRateByAgeAndResidence_Model;
use View;

class HealthFertilityRateByAgeAndResidence extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'fertility_rate'=>'required|numeric',
      'age_group'=>'required|alpha_dash',
      'residence'=>'required|alpha',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
          $HealthFertilityRateByAgeAndResidence =HealthFertilityRateByAgeAndResidence_Model::all();
        
        return view('Forms.health.national.healthfertilityratebyageandresidence',['post' =>$HealthFertilityRateByAgeAndResidence]);
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
        'fertility_rate'=>'required|numeric',
      'age_group'=>'required|alpha_dash',
      'residence'=>'required|alpha',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $fertility = new HealthFertilityRateByAgeAndResidence_Model();
            $fertility->fertility_rate =$request->fertility_rate;
            $fertility->age_group=$request->age_group;
            $fertility->residence=$request->residence;
            $fertility->year=$request->year;
            $fertility->save();
             return response()->json($fertility);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($fertility_id)
    {
        //
         $fertility = HealthFertilityRateByAgeAndResidence_Model::findOrfail($fertility_id);

  
          echo json_encode($fertility);
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
         'fertility_rate'=>'required|numeric',
      'age_group'=>'required|alpha_dash',
      'residence'=>'required|alpha',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $fertility=HealthFertilityRateByAgeAndResidence_Model::find($request->id);
            $fertility->fertility_rate=$request->fertility_rate;
            $fertility->age_group=$request->age_group;
            $fertility->residence=$request->residence;
            $fertility->year=$request->year;
            $fertility->save();
             return response()->json($fertility);
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
