<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_population_who_used_internet_by_place_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//population who used internet by place
  
class ict_kihibs_population_who_used_internet_by_place extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [
            'county_id'=>'required',
            'mobility'=>'required|numeric',
            'work'=>'required|numeric',
            'cyber'=>'required|numeric',
            'ed_centre'=>'required|numeric',
            'comm_centre'=>'required|numeric',
            'another_home'=>'required|numeric',
            'at_home'=>'required|numeric',
            'control'=>'required|numeric',
            'population'=>'required|numeric',
    ];
    public function index()
    {
        $usage = DB::table('ict_kihibs_population_who_used_internet_by_place')
               ->join('health_counties', 'ict_kihibs_population_who_used_internet_by_place.county_id', '=', 'health_counties.county_id')->orderBy('proportion_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_population_who_used_internet_by_place', ['usage' =>$usage,'counties' =>$counties]);
 
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
            'mobility'=>'required|numeric',
            'work'=>'required|numeric',
            'cyber'=>'required|numeric',
            'ed_centre'=>'required|numeric',
            'comm_centre'=>'required|numeric',
            'another_home'=>'required|numeric',
            'at_home'=>'required|numeric',
            'other'=>'required|numeric',
            'population'=>'required|numeric',
            
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $usage = new ict_kihibs_population_who_used_internet_by_place_model();
            $usage->county_id =$request->county_name;
            $usage->work=$request->work;         
            $usage->cyber=$request->cyber;
            $usage->ed_centre=$request->ed_centre;
            $usage->comm_centre=$request->comm_centre;
            $usage->another_home=$request->another_home;         
            $usage->at_home=$request->at_home;
            $usage->other=$request->other;
            $usage->population=$request->population;
            $usage->save();
             return response()->json($usage);
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
        
          $usage = ict_kihibs_population_who_used_internet_by_place_model::findOrfail($proportion_id);
         echo json_encode($usage);
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
            'mobility'=>'required|numeric',
            'work'=>'required|numeric',
            'cyber'=>'required|numeric',
            'ed_centre'=>'required|numeric',
            'comm_centre'=>'required|numeric',
            'another_home'=>'required|numeric',
            'at_home'=>'required|numeric',
            'other'=>'required|numeric',
            'population'=>'required|numeric',
                        
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $usage =ict_kihibs_population_who_used_internet_by_place_model::find($request->id);
            $usage->county_id =$request->county_name;
            $usage->mobility=$request->mobility;
            $usage->work=$request->work;         
            $usage->cyber=$request->cyber;
            $usage->ed_centre=$request->ed_centre;
            $usage->comm_centre=$request->comm_centre;
            $usage->another_home=$request->another_home;         
            $usage->at_home=$request->at_home;
            $usage->other=$request->other;
            $usage->population=$request->population;
            $usage->save();
             return response()->json($usage);
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
    