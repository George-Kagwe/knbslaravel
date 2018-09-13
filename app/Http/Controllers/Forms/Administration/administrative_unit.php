<?php

namespace App\Http\Controllers\Forms\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Administration\administrative_unit_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//Administrative Units 

class administrative_unit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [ 
        'county_id'=>'required',
        'subcounty_id'=>'required|numeric',
        'divisions'=>'required|numeric',
        'locations'=>'required|numeric',
        'sub_locations'=>'required|numeric'

    ]; 
    public function index()
    {
        $administrative_units = DB::table('administrative_unit')
               ->join('health_counties', 'administrative_unit.county_id', '=', 'health_counties.county_id')
               ->join('health_subcounty', 'administrative_unit.subcounty_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('administrative_unit_id', 'ASC')
                ->get();

        $counties = DB::table('health_counties')->get();
        $subcounty = DB::table('health_subcounty')->get();

        return view('Forms.Administration.county.administrative_unit', ['units' =>$administrative_units,'counties' =>$counties,'subcounty' =>$subcounty]);
 
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
                          'subcounty_name'=>'required|numeric',
                          'divisions'=>'required|numeric',
                          'locations'=>'required|numeric',
                          'sub_locations'=>'required|numeric'
                        
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $administrative_units = new administrative_unit_model();
            $administrative_units->county_id =$request->county_name;
            $administrative_units->subcounty_id=$request->subcounty_name;
            $administrative_units->divisions=$request->divisions;
            $administrative_units->locations=$request->locations;
            $administrative_units->sub_locations=$request->sub_locations;       
            $administrative_units->save();
             return response()->json($administrative_units);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($administrative_unit_id)
    {
        
          $administrative_unit = administrative_unit_model::findOrfail($administrative_unit_id);
     
      
         echo json_encode($administrative_unit);
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
                          'subcounty_name'=>'required|numeric',
                          'divisions'=>'required|numeric',
                          'locations'=>'required|numeric',
                          'sub_locations'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $administrative_unit =administrative_unit_model::find($request->id);
            $administrative_unit->county_id =$request->county_name;
            $administrative_unit->subcounty_id=$request->subcounty_name;
            $administrative_unit->divisions=$request->divisions;
            $administrative_unit->locations=$request->locations;
            $administrative_unit->sub_locations=$request->sub_locations;           
            $administrative_unit->save();
             return response()->json($administrative_unit);
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
