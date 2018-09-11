<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthPercentageWhoDrinkAlcoholByAge_Model;
use View;

class HealthPercentageWhoDrinkAlcoholByAge extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'age'=>'required|alpha_dash',
      'women'=>'required|numeric',
      'men'=>'required|numeric'
      
                              
                        
    ];
    public function index()
    {
        //
         $HealthPercentageWhoDrinkAlcoholByAge =HealthPercentageWhoDrinkAlcoholByAge_Model::all();
        
        return view('Forms.health.national.healthpercentagewhodrinkalcoholbyage',['post' =>$HealthPercentageWhoDrinkAlcoholByAge]);
       
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
        'age'=>'required|alpha_dash',
      'women'=>'required|numeric',
       'men'=>'required|numeric'
      
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $percentage = new HealthPercentageWhoDrinkAlcoholByAge_Model();
            $percentage->age =$request->age;
            $percentage->women=$request->women;
             $percentage->men=$request->men;
            
            $percentage->save();
             return response()->json($percentage);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($percentage_id)
    {
        //
        $percentage = HealthPercentageWhoDrinkAlcoholByAge_Model::findOrfail($percentage_id);

  
          echo json_encode($percentage);
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
         'age'=>'required|alpha_dash',
      'women'=>'required|numeric',
       'men'=>'required|numeric'
      
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $percentage=HealthPercentageWhoDrinkAlcoholByAge_Model::find($request->id);
            $percentage->age=$request->age;
            $percentage->women=$request->women;
            $percentage->men=$request->men;
            
            $percentage->save();
             return response()->json($percentage);
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
