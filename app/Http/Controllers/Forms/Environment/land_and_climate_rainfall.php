<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Environment\land_and_climate_rainfall_model;
use View;
use Illuminate\Support\Facades\DB;

class land_and_climate_rainfall extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'rainfall_id'=>'required',
                          'rainfall_in_mm'=>'required|numeric',
                          'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('land_and_climate_rainfall')
               ->join('health_counties', 'land_and_climate_rainfall.county_id', '=', 'health_counties.county_id')
                ->join('land_and_climate_rainfall_ids', 'land_and_climate_rainfall.rainfall_id', '=', 'land_and_climate_rainfall_ids.rainfall_id')
                ->orderBy('climate_rainfall_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $rainfall = DB::table('land_and_climate_rainfall_ids')->get();

      
        return view('forms.environment.county.land_and_climate_rainfall',
                 
                   ['post' =>$data,'counties' =>$counties,
                   'rainfall' =>$rainfall]);
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
                          'rainfall_id'=>'required',
                          'rainfall_in_mm'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $climate = new land_and_climate_rainfall_model();
            $climate->county_id =$request->county_id;
            $climate->rainfall_id=$request->rainfall_id;
            $climate->rainfall_in_mm=$request->rainfall_in_mm;         
            $climate->year=$request->year;
            $climate->save();
             return response()->json($climate);
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
      
          $climate = land_and_climate_rainfall_model::findOrfail($id);
     
      
         echo json_encode($climate);
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
                          'rainfall_id'=>'required',
                          'rainfall_in_mm'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
                $climate =land_and_climate_rainfall_model::find($request->id);
            $climate->county_id =$request->county_id;
            $climate->rainfall_id=$request->rainfall_id;
            $climate->rainfall_in_mm=$request->rainfall_in_mm;         
            $climate->year=$request->year;
            $climate->save();
             return response()->json($climate);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_subcounties($id)
    {
         $subcounties = DB::table('land_and_climate_rainfall_ids')
               ->where('rainfall_id',  '=', $id)               
                ->get();

        return  json_encode($subcounties);
    }
}
