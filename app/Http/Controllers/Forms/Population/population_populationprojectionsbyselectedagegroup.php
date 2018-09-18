<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Population\population_populationprojectionsbyselectedagegroup_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//Population projections by selected age group

class population_populationprojectionsbyselectedagegroup extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 
        'county_id'=>'required',
        'range_0_4'=>'required',
        'range_5_9'=>'required|numeric',
        'range_10_14'=>'required|numeric',
        'range_15_19'=>'required|numeric',
        'range_20_24'=>'required|numeric',
        'range_25_29'=>'required|numeric',
        'range_30_34'=>'required|numeric',
        'range_35_39'=>'required|numeric',
        'range_40_44'=>'required|numeric',
        'range_45_49'=>'required|numeric',
        'range_50_54'=>'required|numeric',
        'range_55_59'=>'required|numeric',
        'range_60_64'=>'required|numeric',
        'range_65_69'=>'required|numeric',
        'range_70_74'=>'required|numeric',
        'range_75_79'=>'required|numeric',
        'range_80_plus'=>'required|numeric',
        'gender'=>'required|alpha',
        'year'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('population_populationprojectionsbyselectedagegroup')
               ->join('health_counties', 'population_populationprojectionsbyselectedagegroup.county_id', '=', 'health_counties.county_id')
                ->orderBy('population_projection_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('Forms.Population.county.population_populationprojectionsbyselectedagegroup',
                 
                   ['post' =>$data,'counties' =>$counties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       

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
            'range_0_4'=>'required',
            'range_5_9'=>'required|numeric',
            'range_10_14'=>'required|numeric',
            'range_15_19'=>'required|numeric',
            'range_20_24'=>'required|numeric',
            'range_25_29'=>'required|numeric',
            'range_30_34'=>'required|numeric',
            'range_35_39'=>'required|numeric',
            'range_40_44'=>'required|numeric',
            'range_45_49'=>'required|numeric',
            'range_50_54'=>'required|numeric',
            'range_55_59'=>'required|numeric',
            'range_60_64'=>'required|numeric',
            'range_65_69'=>'required|numeric',
            'range_70_74'=>'required|numeric',
            'range_75_79'=>'required|numeric',
            'range_80_plus'=>'required|numeric',
            'gender'=>'required|alpha',
            'year'=>'required|numeric',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $select = new population_populationprojectionsbyselectedagegroup_model();
            $select->county_id =$request->county_id;
            $select->range_0_4=$request->range_0_4;
            $select->range_5_9=$request->range_5_9;         
            $select->range_10_14=$request->range_10_14;
            $select->range_15_19=$request->range_15_19;
            $select->range_20_24=$request->range_20_24;         
            $select->range_25_29=$request->range_25_29;
            $select->range_30_34=$request->range_30_34;
            $select->range_35_39=$request->range_35_39;
            $select->range_40_44=$request->range_40_44;
            $select->range_45_49=$request->range_45_49;
            $select->range_50_54=$request->range_50_54;
            $select->range_55_59=$request->range_55_59;
            $select->range_60_64=$request->range_60_64;
            $select->range_65_69=$request->range_65_69;
            $select->range_70_74=$request->range_70_74;         
            $select->range_75_79=$request->range_75_79;
            $select->range_80_plus=$request->range_80_plus;
            $select->gender=$request->gender;
            $select->year=$request->year;
          
         
         
            $select->save();
             return response()->json($select);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($population_projection_id)
    {
      
          $select = population_populationprojectionsbyselectedagegroup_model::findOrfail($population_projection_id);
     
      
         echo json_encode($select);
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
            'range_0_4'=>'required',
            'range_5_9'=>'required|numeric',
            'range_10_14'=>'required|numeric',
            'range_15_19'=>'required|numeric',
            'range_20_24'=>'required|numeric',
            'range_25_29'=>'required|numeric',
            'range_30_34'=>'required|numeric',
            'range_35_39'=>'required|numeric',
            'range_40_44'=>'required|numeric',
            'range_45_49'=>'required|numeric',
            'range_50_54'=>'required|numeric',
            'range_55_59'=>'required|numeric',
            'range_60_64'=>'required|numeric',
            'range_65_69'=>'required|numeric',
            'range_70_74'=>'required|numeric',
            'range_75_79'=>'required|numeric',
            'range_80_plus'=>'required|numeric',
            'gender'=>'required|alpha',
            'year'=>'required|numeric',


        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $select =population_populationprojectionsbyselectedagegroup_model::find($request->id);
            $select->county_id =$request->county_id;
            $select->range_0_4=$request->range_0_4;
            $select->range_5_9=$request->range_5_9;         
            $select->range_10_14=$request->range_10_14;
            $select->range_15_19=$request->range_15_19;
            $select->range_20_24=$request->range_20_24;         
            $select->range_25_29=$request->range_25_29;
            $select->range_30_34=$request->range_30_34;
            $select->range_35_39=$request->range_35_39;
            $select->range_40_44=$request->range_40_44;
            $select->range_45_49=$request->range_45_49;
            $select->range_50_54=$request->range_50_54;
            $select->range_55_59=$request->range_55_59;
            $select->range_60_64=$request->range_60_64;
            $select->range_65_69=$request->range_65_69;
            $select->range_70_74=$request->range_70_74;         
            $select->range_75_79=$request->range_75_79;
            $select->range_80_plus=$request->range_80_plus;
            $select->gender=$request->gender;
            $select->year=$request->year;
            $select->save();
             return response()->json($select);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
