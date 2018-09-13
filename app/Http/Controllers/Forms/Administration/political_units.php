<?php

namespace App\Http\Controllers\Forms\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Administration\political_units_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//Political Units

class political_units extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [ 
        'county_id'=>'required',
        'subcounty_id'=>'required|numeric',
        'county_ward'=>'required|numeric'

    ]; 
    public function index()
    {
        $political_units = DB::table('political_units')
               ->join('health_counties', 'political_units.county_id', '=', 'health_counties.county_id')
               ->join('health_subcounty', 'political_units.subcounty_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('political_unit_id', 'ASC')
                ->get();

        $counties = DB::table('health_counties')->get();
        $subcounty = DB::table('health_subcounty')->get();

        return view('Forms.Administration.county.political_units', ['political_units' =>$political_units,'counties' =>$counties,'subcounty' =>$subcounty]);
 
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
                          'county_ward'=>'required|numeric',
                        
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $political_units = new political_units_model();
            $political_units->county_id =$request->county_name;
            $political_units->subcounty_id=$request->subcounty_name;
            $political_units->county_ward=$request->county_ward;       
            $political_units->save();
             return response()->json($political_units);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($political_unit_id)
    {
        
          $political_unit = political_units_model::findOrfail($political_unit_id);
     
      
         echo json_encode($political_unit);
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
                          'county_ward'=>'required|numeric',
                          
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $political_unit =political_units_model::find($request->id);
            $political_unit->county_id =$request->county_name;
            $political_unit->subcounty_id=$request->subcounty_name;
            $political_unit->county_ward=$request->county_ward;         
            $political_unit->save();
             return response()->json($political_unit);
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
