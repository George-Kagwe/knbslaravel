<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Population\population_populationprojectionsbyspecialagegroups_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//Population projections by special age groups

class population_populationprojectionsbyspecialagegroups extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 
        'county_id'=>'required',
        'under_1'=>'required',
        'range_1_2'=>'required|numeric',
        'range_3_5'=>'required|numeric',
        'range_6_13'=>'required|numeric',
        'range_14_17'=>'required|numeric',
        'range_18_24'=>'required|numeric',
        'range_18_34'=>'required|numeric',
        'range_less_18'=>'required|numeric',
        'range_18_plus'=>'required|numeric',
        'range_15_49'=>'required|numeric',
        'range_15_64'=>'required|numeric',
        'range_65_plus'=>'required|numeric',
        'gender'=>'required|max:255',
        'year'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('population_populationprojectionsbyspecialagegroups')
               ->join('health_counties', 'population_populationprojectionsbyspecialagegroups.county_id', '=', 'health_counties.county_id')
                ->orderBy('selected_age_group_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('Forms.Population.county.population_populationprojectionsbyspecialagegroups',
                 
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
            'under_1'=>'required',
            'range_1_2'=>'required|numeric',
            'range_3_5'=>'required|numeric',
            'range_6_13'=>'required|numeric',
            'range_14_17'=>'required|numeric',
            'range_18_24'=>'required|numeric',
            'range_18_34'=>'required|numeric',
            'range_less_18'=>'required|numeric',
            'range_18_plus'=>'required|numeric',
            'range_15_49'=>'required|numeric',
            'range_15_64'=>'required|numeric',
            'range_65_plus'=>'required|numeric',
            'gender'=>'required|max:255',
            'year'=>'required|numeric',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $select = new population_populationprojectionsbyspecialagegroups_model();
            $select->county_id =$request->county_id;
            $select->under_1=$request->under_1;
            $select->range_1_2=$request->range_1_2;         
            $select->range_3_5=$request->range_3_5;
            $select->range_6_13=$request->range_6_13;
            $select->range_14_17=$request->range_14_17;         
            $select->range_18_24=$request->range_18_24;
            $select->range_18_34=$request->range_18_34;
            $select->range_less_18=$request->range_less_18;
            $select->range_18_plus=$request->range_18_plus;
            $select->range_15_49=$request->range_15_49;
            $select->range_15_64=$request->range_15_64;
            $select->range_65_plus=$request->range_65_plus;
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
    public function show($selected_age_group_id)
    {
      
          $select = population_populationprojectionsbyspecialagegroups_model::findOrfail($selected_age_group_id);
     
      
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
            'under_1'=>'required',
            'range_1_2'=>'required|numeric',
            'range_3_5'=>'required|numeric',
            'range_6_13'=>'required|numeric',
            'range_14_17'=>'required|numeric',
            'range_18_24'=>'required|numeric',
            'range_18_34'=>'required|numeric',
            'range_less_18'=>'required|numeric',
            'range_18_plus'=>'required|numeric',
            'range_15_49'=>'required|numeric',
            'range_15_64'=>'required|numeric',
            'range_65_plus'=>'required|numeric',
            'gender'=>'required|max:255',
            'year'=>'required|numeric',


        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $select =population_populationprojectionsbyspecialagegroups_model::find($request->id);
            $select->county_id =$request->county_id;
            $select->under_1=$request->under_1;
            $select->range_1_2=$request->range_1_2;         
            $select->range_3_5=$request->range_3_5;
            $select->range_6_13=$request->range_6_13;
            $select->range_14_17=$request->range_14_17;         
            $select->range_18_24=$request->range_18_24;
            $select->range_18_34=$request->range_18_34;
            $select->range_less_18=$request->range_less_18;
            $select->range_18_plus=$request->range_18_plus;
            $select->range_15_49=$request->range_15_49;
            $select->range_15_64=$request->range_15_64;
            $select->range_65_plus=$request->range_65_plus;
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
