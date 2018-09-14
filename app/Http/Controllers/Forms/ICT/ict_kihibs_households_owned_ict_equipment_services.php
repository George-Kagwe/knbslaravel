<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_households_owned_ict_equipment_services_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//households owned ict equipments

class ict_kihibs_households_owned_ict_equipment_services extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'computer'=>'required|numeric',
        'television'=>'required|numeric',
        'households'=>'required|numeric',

    ];
    public function index()
    {
        $ict_equipments = DB::table('ict_kihibs_households_owned_ict_equipment_services')
               ->join('health_counties', 'ict_kihibs_households_owned_ict_equipment_services.county_id', '=', 'health_counties.county_id')->orderBy('household_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.ict_kihibs_households_owned_ict_equipment_services', ['ict_items' =>$ict_equipments,'counties' =>$counties]);
 
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
                          'county_id'=>'required',
                          'computer'=>'required|numeric',
                          'television'=>'required|numeric',
                          'households'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $ict_items = new ict_kihibs_households_owned_ict_equipment_services_model();
            $ict_items->county_id =$request->county_name;
            $ict_items->computer=$request->computer;
            $ict_items->television=$request->television;         
            $ict_items->households=$request->households;
            $ict_items->save();
             return response()->json($ict_items);
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
        
          $ict_item = ict_kihibs_households_owned_ict_equipment_services_model::findOrfail($household_id);
     
      
         echo json_encode($ict_item);
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
                          'county_id'=>'required',
                          'computer'=>'required|numeric',
                          'television'=>'required|numeric',
                          'households'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $ict_item =ict_kihibs_households_owned_ict_equipment_services_model::find($request->id);
            $ict_item->county_id =$request->county_name;
            $ict_item->computer=$request->computer;
            $ict_item->television=$request->television;         
            $ict_item->households=$request->households;
            $ict_item->save();
             return response()->json($ict_item);
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
