<?php

namespace App\Http\Controllers\Forms\Tourism;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Tourism\tourism_hotel_occupancy_by_zone_model;
use View;
 
//@Charles Ndirangu
//Tourism Occupancy by Zone

class tourism_hotel_occupancy_by_zone extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        
                'coastal_beach'=>'required|numeric',
                'coastal_other'=>'required|numeric',
                'coastal_hinterland'=>'required|numeric',
                'nairobi_high_class'=>'required|numeric',
                'nairobi_other'=>'required|numeric',
                'central'=>'required|numeric',
                'masailand'=>'required|numeric',
                'nyanza_basin'=>'required|numeric',
                'western'=>'required|numeric',
                'northern'=>'required|numeric',
                'total_occupied'=>'required|numeric',
                'total_available'=>'required|numeric',
                'year'=>'required|numeric'
    ];
    public function index()
    {
         $occupancy_by_residency = tourism_hotel_occupancy_by_zone_model::all();
        return view('Forms.Tourism.national.tourism_hotel_occupancy_by_zone',['occupancy' =>$occupancy_by_residency]);
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
                'coastal_beach'=>'required|numeric',
                'coastal_other'=>'required|numeric',
                'coastal_hinterland'=>'required|numeric',
                'nairobi_high_class'=>'required|numeric',
                'nairobi_other'=>'required|numeric',
                'central'=>'required|numeric',
                'masailand'=>'required|numeric',
                'nyanza_basin'=>'required|numeric',
                'western'=>'required|numeric',
                'northern'=>'required|numeric',
                'total_occupied'=>'required|numeric',
                'total_available'=>'required|numeric',
                'year'=>'required|numeric'
                
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $occupancy = new tourism_hotel_occupancy_by_zone_model();
            $occupancy->coastal_beach=$request->coastal_beach;
            $occupancy->coastal_other=$request->coastal_other;
            $occupancy->coastal_hinterland=$request->coastal_hinterland;
            $occupancy->nairobi_high_class=$request->nairobi_high_class;
            $occupancy->nairobi_other=$request->nairobi_other;
            $occupancy->central=$request->central;
            $occupancy->masailand=$request->masailand;
            $occupancy->nyanza_basin=$request->nyanza_basin;
            $occupancy->western=$request->western;
            $occupancy->northern=$request->northern;
            $occupancy->total_occupied=$request->total_occupied;
            $occupancy->total_available=$request->total_available;
            $occupancy->year=$request->year;
            $occupancy->save();
             return response()->json($occupancy);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $occupancy = tourism_hotel_occupancy_by_zone_model::findOrfail($id);
        echo json_encode($occupancy);
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
                'coastal_beach'=>'required|numeric',
                'coastal_other'=>'required|numeric',
                'coastal_hinterland'=>'required|numeric',
                'nairobi_high_class'=>'required|numeric',
                'nairobi_other'=>'required|numeric',
                'central'=>'required|numeric',
                'masailand'=>'required|numeric',
                'nyanza_basin'=>'required|numeric',
                'western'=>'required|numeric',
                'northern'=>'required|numeric',
                'total_occupied'=>'required|numeric',
                'total_available'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $occupancy =  tourism_hotel_occupancy_by_zone_model::find($request->id);
            $occupancy->coastal_beach=$request->coastal_beach;
            $occupancy->coastal_other=$request->coastal_other;
            $occupancy->coastal_hinterland=$request->coastal_hinterland;
            $occupancy->nairobi_high_class=$request->nairobi_high_class;
            $occupancy->nairobi_other=$request->nairobi_other;
            $occupancy->central=$request->central;
            $occupancy->masailand=$request->masailand;
            $occupancy->nyanza_basin=$request->nyanza_basin;
            $occupancy->western=$request->western;
            $occupancy->northern=$request->northern;
            $occupancy->total_occupied=$request->total_occupied;
            $occupancy->total_available=$request->total_available;
            $occupancy->year=$request->year;
            $occupancy->save();
             return response()->json($occupancy);
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
