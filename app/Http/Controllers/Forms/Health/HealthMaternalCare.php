<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthMaternalCare_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthMaternalCare extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'percent_receiving_antenatal_care_from_a_skilled_provider' =>'required|numeric',
                             'percent_delivered_in_a_health_facility' =>'required|numeric',
                                'percent_delivered_by_a_skilled_provider' =>'required|numeric'
                          
    ];
    public function index()
    {
        //
         $data = DB::table('health_maternal_care')
               ->join('health_counties', 'health_maternal_care.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('maternal_care_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               
                          
                          

      
        return view('forms.health.county.healthmaternalcare',
                 
                   ['post' =>$data,'counties' =>$counties
                   ]);
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
    'county_id'=>'required|numeric',
                          'percent_receiving_antenatal_care_from_a_skilled_provider' =>'required|numeric',
                             'percent_delivered_in_a_health_facility' =>'required|numeric',
                                'percent_delivered_by_a_skilled_provider' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $maternal = new HealthMaternalCare_Model();
            $maternal->county_id =$request->county_id;
            $maternal->percent_receiving_antenatal_care_from_a_skilled_provider=$request->percent_receiving_antenatal_care_from_a_skilled_provider;
            $maternal->percent_delivered_in_a_health_facility=$request->percent_delivered_in_a_health_facility;
            $maternal->percent_delivered_by_a_skilled_provider=$request->percent_delivered_by_a_skilled_provider;
            $maternal->save();
             return response()->json($maternal);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($maternal_care_id)
    {
        //
         $maternal = HealthMaternalCare_Model::findOrfail($maternal_care_id);

  
          echo json_encode($maternal);  
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
     
                         'county_id'=>'required|numeric',
                          'percent_receiving_antenatal_care_from_a_skilled_provider' =>'required|numeric',
                             'percent_delivered_in_a_health_facility' =>'required|numeric',
                                'percent_delivered_by_a_skilled_provider' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $maternal =HealthMaternalCare_Model::find($request->id);
   $maternal->county_id =$request->county_id;
            $maternal->percent_receiving_antenatal_care_from_a_skilled_provider=$request->percent_receiving_antenatal_care_from_a_skilled_provider;
            $maternal->percent_delivered_in_a_health_facility=$request->percent_delivered_in_a_health_facility;
            $maternal->percent_delivered_by_a_skilled_provider=$request->percent_delivered_by_a_skilled_provider;
            $maternal->save();
             return response()->json($maternal);
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
