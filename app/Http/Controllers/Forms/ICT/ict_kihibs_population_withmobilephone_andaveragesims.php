<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_population_withmobilephone_andaveragesims_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//population with average phones and sims

class ict_kihibs_population_withmobilephone_andaveragesims extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'phone'=>'required|numeric',
        'population'=>'required|numeric',
        'avg_sims'=>'required|numeric',
        'population_sims'=>'required|numeric',

    ];
    public function index()
    {
        $phone_sim = DB::table('ict_kihibs_population_withmobilephone_andaveragesims')
               ->join('health_counties', 'ict_kihibs_population_withmobilephone_andaveragesims.county_id', '=', 'health_counties.county_id')->orderBy('proportion_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_population_withmobilephone_andaveragesims', ['sims' =>$phone_sim,'counties' =>$counties]);
 
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
        $validator = \Validator::make($request->all(), [
                          'county_name'=>'required',
                          'phone'=>'required|numeric',
                          'population'=>'required|numeric',
                          'avg_sims'=>'required|numeric',
                          'population_sims'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $sims_phones = new ict_kihibs_population_withmobilephone_andaveragesims_model();
            $sims_phones->county_id =$request->county_name;
            $sims_phones->phone=$request->phone;
            $sims_phones->population=$request->population;         
            $sims_phones->avg_sims=$request->avg_sims;
            $sims_phones->population_sims=$request->population_sims;
            $sims_phones->save();
             return response()->json($sims_phones);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($proportion_id)
    {
        
          $sims_phone = ict_kihibs_population_withmobilephone_andaveragesims_model::findOrfail($proportion_id);
     
      
         echo json_encode($sims_phone);
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
                          'county_name'=>'required',
                          'phone'=>'required|numeric',
                          'population'=>'required|numeric',
                          'avg_sims'=>'required|numeric',
                          'population_sims'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $sims_phone =ict_kihibs_population_withmobilephone_andaveragesims_model::find($request->id);
            $sims_phone->county_id =$request->county_name;
            $sims_phone->phone=$request->phone;
            $sims_phone->population=$request->population;         
            $sims_phone->avg_sims=$request->avg_sims;
            $sims_phone->population_sims=$request->population_sims;
            $sims_phone->save();
             return response()->json($sims_phone);
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
