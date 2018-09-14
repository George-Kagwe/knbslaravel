<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthImmunizationRate_Model;
use View;
use Illuminate\Support\Facades\DB;
class HealthImmunizationRate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'rate' =>'required|numeric',
                          'year' =>'required|numeric'
    ];
    public function index()
    {
        //
         $data = DB::table('health_immunization_rate')
               ->join('health_counties', 'health_immunization_rate.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('immunization_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               
                          
                          

      
        return view('forms.health.county.healthimmunizationrate',
                 
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
                          'rate' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $immunization = new HealthImmunizationRate_Model();
            $immunization->county_id =$request->county_id;
            $immunization->rate=$request->rate;
        
         
            $immunization->year=$request->year;
            $immunization->save();
             return response()->json($immunization);
           echo json_encode(array("status" => TRUE));

        }   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($immunization_id)
    {
        //
        $immunization = HealthImmunizationRate_Model::findOrfail($immunization_id);

  
          echo json_encode($immunization);    

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
                          'rate' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $immunization =HealthImmunizationRate_Model::find($request->id);
     $immunization->county_id =$request->county_id;
            $immunization->rate=$request->rate;
        
         
            $immunization->year=$request->year;
            $immunization->save();
             return response()->json($immunization);
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
