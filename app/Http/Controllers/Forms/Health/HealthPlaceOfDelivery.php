<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthPlaceOfDelivery_Model;
use View;

class HealthPlaceOfDelivery extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'number'=>'required|numeric',
      'place'=>'required|alpha',
      
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $HealthPlaceOfDelivery =HealthPlaceOfDelivery_Model::all();
        
        return view('Forms.health.national.healthplaceofdelivery',['post' =>$HealthPlaceOfDelivery]);
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
        'number'=>'required|numeric',
      'place'=>'required|alpha',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $placeN = new HealthPlaceOfDelivery_Model();
            $placeN->number =$request->number;
            $placeN->place=$request->place;
            
            $placeN->year=$request->year;
            $placeN->save();
             return response()->json($placeN);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($place_id)
    {
        //
            $placeN = HealthPlaceOfDelivery_Model::findOrfail($place_id);

  
          echo json_encode($placeN);
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
         'number'=>'required|numeric',
      'place'=>'required|alpha',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $placeN=HealthPlaceOfDelivery_Model::find($request->id);
            $placeN->number=$request->number;
            $placeN->place=$request->place;
            $placeN->year=$request->year;
            $placeN->save();
             return response()->json($placeN);
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
