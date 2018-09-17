<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_households_without_internet_by_reason_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//households without internet
  
class ict_kihibs_households_without_internet_by_reason extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [
            'county_id'=>'required',
            'dont_need'=>'required|numeric',
            'lack_skills'=>'required|numeric',
            'no_network'=>'required|numeric',
            'access_elsewhere'=>'required|numeric',
            'doesnt_meet_needs'=>'required|numeric',
            'service_cost_high'=>'required|numeric',
            'equipment_cost_high'=>'required|numeric',
            'cultural_reasons'=>'required|numeric',
            'other_reasons'=>'required|numeric',
            'households'=>'required|numeric',  
 
    ];
    public function index()
    {
        $no_net = DB::table('ict_kihibs_households_without_internet_by_reason')
               ->join('health_counties', 'ict_kihibs_households_without_internet_by_reason.county_id', '=', 'health_counties.county_id')->orderBy('distribution_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_households_without_internet_by_reason', ['no_nets' =>$no_net,'counties' =>$counties]);
 
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
            'dont_need'=>'required|numeric',
            'lack_skills'=>'required|numeric',
            'no_network'=>'required|numeric',
            'access_elsewhere'=>'required|numeric',
            'doesnt_meet_needs'=>'required|numeric',
            'service_cost_high'=>'required|numeric',
            'equipment_cost_high'=>'required|numeric',
            'cultural_reasons'=>'required|numeric',
            'other_reasons'=>'required|numeric',
            'households'=>'required|numeric',  
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $no_net = new ict_kihibs_households_without_internet_by_reason_model();
            $no_net->county_id =$request->county_name;
            $no_net->dont_need=$request->dont_need;
            $no_net->lack_skills=$request->lack_skills;         
            $no_net->no_network=$request->no_network;
            $no_net->access_elsewhere=$request->access_elsewhere;
            $no_net->doesnt_meet_needs=$request->doesnt_meet_needs;
            $no_net->service_cost_high=$request->service_cost_high;         
            $no_net->equipment_cost_high=$request->equipment_cost_high;
            $no_net->cultural_reasons=$request->cultural_reasons;
            $no_net->other_reasons=$request->other_reasons;
            $no_net->households=$request->households;
            $no_net->save();
             return response()->json($no_net);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($distribution_id)
    {
        
          $no_net = ict_kihibs_households_without_internet_by_reason_model::findOrfail($distribution_id);
     
      
         echo json_encode($no_net);
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
            'dont_need'=>'required|numeric',
            'lack_skills'=>'required|numeric',
            'no_network'=>'required|numeric',
            'access_elsewhere'=>'required|numeric',
            'doesnt_meet_needs'=>'required|numeric',
            'service_cost_high'=>'required|numeric',
            'equipment_cost_high'=>'required|numeric',
            'cultural_reasons'=>'required|numeric',
            'other_reasons'=>'required|numeric',
            'households'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $no_net =ict_kihibs_households_without_internet_by_reason_model::find($request->id);
            $no_net->county_id =$request->county_name;
            $no_net->dont_need=$request->dont_need;
            $no_net->lack_skills=$request->lack_skills;         
            $no_net->no_network=$request->no_network;
            $no_net->access_elsewhere=$request->access_elsewhere;
            $no_net->doesnt_meet_needs=$request->doesnt_meet_needs;
            $no_net->service_cost_high=$request->service_cost_high;         
            $no_net->equipment_cost_high=$request->equipment_cost_high;
            $no_net->cultural_reasons=$request->cultural_reasons;
            $no_net->other_reasons=$request->other_reasons;
            $no_net->households=$request->households;
            $no_net->save();
             return response()->json($no_net);
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
    