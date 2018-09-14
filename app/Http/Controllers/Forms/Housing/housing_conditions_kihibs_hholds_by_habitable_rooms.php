<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_hholds_by_habitable_rooms_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_hholds_by_habitable_rooms extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'one'=>'required',
                          'two'=>'required|numeric',
                          'three'=>'required|numeric',
                          'four'=>'required|numeric',
                          'five'=>'required|numeric',
                          'six_plus'=>'required|numeric',
                         'not_stated'=>'required|numeric',
                          'mean_rooms'=>'required|numeric',
                          'households'=>'required|numeric',
                          'persons_per_room'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_hholds_by_habitable_rooms')
               ->join('health_counties', 'housing_conditions_kihibs_hholds_by_habitable_rooms.county_id', '=', 'health_counties.county_id')
                ->orderBy('room_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_hholds_by_habitable_rooms',
                 
                   ['post' =>$data,'counties' =>$counties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       

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
                          'county_id'=>'required',
                          'one'=>'required',
                          'two'=>'required|numeric',
                          'three'=>'required|numeric',
                          'four'=>'required|numeric',
                          'five'=>'required|numeric',
                          'six_plus'=>'required|numeric',
                         'not_stated'=>'required|numeric',
                          'mean_rooms'=>'required|numeric',
                          'households'=>'required|numeric',
                          'persons_per_room'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $rooms = new housing_conditions_kihibs_hholds_by_habitable_rooms_model();
            $rooms->county_id =$request->county_id;
            $rooms->one=$request->one;
            $rooms->two=$request->two;         
            $rooms->three=$request->three;

            $rooms->four=$request->four;
            $rooms->five=$request->five;         
            $rooms->six_plus=$request->six_plus;

            $rooms->not_stated=$request->not_stated;
            $rooms->mean_rooms=$request->mean_rooms;         
            $rooms->households=$request->households;

            $rooms->persons_per_room=$request->persons_per_room;
         
         
            $rooms->save();
             return response()->json($rooms);
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
      
          $rooms = housing_conditions_kihibs_hholds_by_habitable_rooms_model::findOrfail($id);
     
      
         echo json_encode($rooms);
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
                          'county_id'=>'required',
                          'one'=>'required',
                          'two'=>'required|numeric',
                          'three'=>'required|numeric',
                          'four'=>'required|numeric',
                          'five'=>'required|numeric',
                          'six_plus'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'mean_rooms'=>'required|numeric',
                          'households'=>'required|numeric',
                          'persons_per_room'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $rooms =housing_conditions_kihibs_hholds_by_habitable_rooms_model::find($request->id);
            $rooms->county_id =$request->county_id;
            $rooms->one=$request->one;
            $rooms->two=$request->two;         
            $rooms->three=$request->three;

            $rooms->four=$request->four;
            $rooms->five=$request->five;         
            $rooms->six_plus=$request->six_plus;

            $rooms->not_stated=$request->not_stated;
            $rooms->mean_rooms=$request->mean_rooms;         
            $rooms->households=$request->households;

            $rooms->persons_per_room=$request->persons_per_room;
        
            $rooms->save();
             return response()->json($rooms);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
