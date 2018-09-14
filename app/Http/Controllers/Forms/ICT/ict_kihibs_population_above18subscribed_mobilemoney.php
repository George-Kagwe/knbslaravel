<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_population_above18subscribed_mobilemoney_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//population mobile money subscribers

class ict_kihibs_population_above18subscribed_mobilemoney extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'mobile_money'=>'required|numeric',
        'mobile_banking'=>'required|numeric',
        'population'=>'required|numeric',

    ];
    public function index()
    {
        $subscribers_mb = DB::table('ict_kihibs_population_above18subscribed_mobilemoney')
               ->join('health_counties', 'ict_kihibs_population_above18subscribed_mobilemoney.county_id', '=', 'health_counties.county_id')->orderBy('proportion_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_population_above18subscribed_mobilemoney', ['mobile_subscriber' =>$subscribers_mb,'counties' =>$counties]);
 
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
                          'mobile_money'=>'required|numeric',
                          'mobile_banking'=>'required|numeric',
                          'population'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $mobile_subscriber = new ict_kihibs_population_above18subscribed_mobilemoney_model();
            $mobile_subscriber->county_id =$request->county_name;
            $mobile_subscriber->mobile_money=$request->mobile_money;
            $mobile_subscriber->mobile_banking=$request->mobile_banking;         
            $mobile_subscriber->population=$request->population;
            $mobile_subscriber->save();
             return response()->json($mobile_subscriber);
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
        
          $subscriber = ict_kihibs_population_above18subscribed_mobilemoney_model::findOrfail($proportion_id);
     
      
         echo json_encode($subscriber);
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
                          'mobile_money'=>'required|numeric',
                          'mobile_banking'=>'required|numeric',
                          'population'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $subscriber =ict_kihibs_population_above18subscribed_mobilemoney_model::find($request->id);
            $subscriber->county_id =$request->county_name;
            $subscriber->mobile_money=$request->mobile_money;
            $subscriber->mobile_banking=$request->mobile_banking;         
            $subscriber->population=$request->population;
            $subscriber->save();
             return response()->json($subscriber);
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
