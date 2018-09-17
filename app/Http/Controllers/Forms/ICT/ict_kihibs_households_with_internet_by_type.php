<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_households_with_internet_by_type_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//households with internet by type
 
class ict_kihibs_households_with_internet_by_type extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'fixed_wired'=>'required|numeric',
        'fixed_wireless'=>'required|numeric',
        'mobile_broadband'=>'required|numeric',
        'mobile'=>'required|numeric',
        'other'=>'required|numeric',
        'households'=>'required|numeric'

    ];
    public function index()
    {
        $internet_type = DB::table('ict_kihibs_households_with_internet_by_type')
               ->join('health_counties', 'ict_kihibs_households_with_internet_by_type.county_id', '=', 'health_counties.county_id')->orderBy('distribution_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_households_with_internet_by_type', ['internet' =>$internet_type,'counties' =>$counties]);
 
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
                            'fixed_wired'=>'required|numeric',
                            'fixed_wireless'=>'required|numeric',
                            'mobile_broadband'=>'required|numeric',
                            'mobile'=>'required|numeric',
                            'other'=>'required|numeric',
                            'households'=>'required|numeric'
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $internet_types = new ict_kihibs_households_with_internet_by_type_model();
            $internet_types->county_id =$request->county_name;
            $internet_types->fixed_wired=$request->fixed_wired;
            $internet_types->fixed_wireless=$request->fixed_wireless;         
            $internet_types->mobile_broadband=$request->mobile_broadband;
            $internet_types->mobile=$request->mobile;
            $internet_types->other=$request->other;
            $internet_types->households=$request->households;
            $internet_types->save();
             return response()->json($internet_types);
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
        
          $internet_type = ict_kihibs_households_with_internet_by_type_model::findOrfail($distribution_id);
     
      
         echo json_encode($internet_type);
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
                            'fixed_wired'=>'required|numeric',
                            'fixed_wireless'=>'required|numeric',
                            'mobile_broadband'=>'required|numeric',
                            'mobile'=>'required|numeric',
                            'other'=>'required|numeric',
                            'households'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $internet_type =ict_kihibs_households_with_internet_by_type_model::find($request->id);
            $internet_type->county_id =$request->county_name;
            $internet_type->fixed_wired=$request->fixed_wired;
            $internet_type->fixed_wireless=$request->fixed_wireless;         
            $internet_type->mobile_broadband=$request->mobile_broadband;
            $internet_type->mobile=$request->mobile;
            $internet_type->other=$request->other;
            $internet_type->households=$request->households;
            $internet_type->save();
             return response()->json($internet_type);
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
