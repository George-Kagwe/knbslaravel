<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_population_by_ictequipment_and_servicesused_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//population with internet by type
 
class ict_kihibs_population_by_ictequipment_and_servicesused extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'television'=>'required|numeric',
        'radio'=>'required|numeric',
        'mobile'=>'required|numeric',
        'computer'=>'required|numeric',
        'internet'=>'required|numeric',
        'population'=>'required|numeric'

    ];
    public function index()
    {
        $ict_equipment = DB::table('ict_kihibs_population_by_ictequipment_and_servicesused')
               ->join('health_counties', 'ict_kihibs_population_by_ictequipment_and_servicesused.county_id', '=', 'health_counties.county_id')->orderBy('proportion_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_population_by_ictequipment_and_servicesused', ['ict' =>$ict_equipment,'counties' =>$counties]);
 
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
                            'television'=>'required|numeric',
                            'radio'=>'required|numeric',
                            'mobile'=>'required|numeric',
                            'computer'=>'required|numeric',
                            'internet'=>'required|numeric',
                            'population'=>'required|numeric'
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $ict_equipments = new ict_kihibs_population_by_ictequipment_and_servicesused_model();
            $ict_equipments->county_id =$request->county_name;
            $ict_equipments->television=$request->television;
            $ict_equipments->radio=$request->radio;         
            $ict_equipments->mobile=$request->mobile;
            $ict_equipments->computer=$request->computer;
            $ict_equipments->internet=$request->internet;
            $ict_equipments->population=$request->population;
            $ict_equipments->save();
             return response()->json($ict_equipments);
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
        
          $ict_equipment = ict_kihibs_population_by_ictequipment_and_servicesused_model::findOrfail($proportion_id);
     
      
         echo json_encode($ict_equipment);
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
                            'television'=>'required|numeric',
                            'radio'=>'required|numeric',
                            'mobile'=>'required|numeric',
                            'computer'=>'required|numeric',
                            'internet'=>'required|numeric',
                            'population'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $ict_equipment =ict_kihibs_population_by_ictequipment_and_servicesused_model::find($request->id);
            $ict_equipment->county_id =$request->county_name;
            $ict_equipment->television=$request->television;
            $ict_equipment->radio=$request->radio;         
            $ict_equipment->mobile=$request->mobile;
            $ict_equipment->computer=$request->computer;
            $ict_equipment->internet=$request->internet;
            $ict_equipment->population=$request->population;
            $ict_equipment->save();
             return response()->json($ict_equipment);
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
