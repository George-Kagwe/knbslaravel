<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_households_with_tv_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//households with tvs
  
class ict_kihibs_households_with_tv extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'digital_tv'=>'required|numeric',
        'pay_tv'=>'required|numeric',
        'free_to_air'=>'required|numeric',
        'ip_tv'=>'required|numeric',
        'none'=>'required|numeric',
        'households'=>'required|numeric'
        

    ];
    public function index()
    {
        $tv = DB::table('ict_kihibs_households_with_tv')
               ->join('health_counties', 'ict_kihibs_households_with_tv.county_id', '=', 'health_counties.county_id')->orderBy('household_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_households_with_tv', ['tvs' =>$tv,'counties' =>$counties]);
 
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
                            'digital_tv'=>'required|numeric',
                            'pay_tv'=>'required|numeric',
                            'free_to_air'=>'required|numeric',
                            'ip_tv'=>'required|numeric',
                            'none'=>'required|numeric',
                            'households'=>'required|numeric'
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $tvs = new ict_kihibs_households_with_tv_model();
            $tvs->county_id =$request->county_name;
            $tvs->digital_tv=$request->digital_tv;
            $tvs->pay_tv=$request->pay_tv;         
            $tvs->free_to_air=$request->free_to_air;
            $tvs->ip_tv=$request->ip_tv;
            $tvs->none=$request->none;
            $tvs->households=$request->households;
            $tvs->save();
             return response()->json($tvs);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($household_id)
    {
        
          $tv = ict_kihibs_households_with_tv_model::findOrfail($household_id);
     
      
         echo json_encode($tv);
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
                            'digital_tv'=>'required|numeric',
                            'pay_tv'=>'required|numeric',
                            'free_to_air'=>'required|numeric',
                            'ip_tv'=>'required|numeric',
                            'none'=>'required|numeric',
                            'households'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $tv =ict_kihibs_households_with_tv_model::find($request->id);
            $tv->county_id =$request->county_name;
            $tv->digital_tv=$request->digital_tv;
            $tv->pay_tv=$request->pay_tv;         
            $tv->free_to_air=$request->free_to_air;
            $tv->ip_tv=$request->ip_tv;
            $tv->none=$request->none;
            $tv->households=$request->households;
            $tv->save();
             return response()->json($tv);
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
