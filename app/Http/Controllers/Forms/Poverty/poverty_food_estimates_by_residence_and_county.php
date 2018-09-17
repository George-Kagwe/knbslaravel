<?php

namespace App\Http\Controllers\Forms\Poverty;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Poverty\poverty_food_estimates_by_residence_and_county_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//Poverty food estimate by county and residence
  
class poverty_food_estimates_by_residence_and_county extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'headcount_rate'=>'required|numeric',
        'distribution_of_the_poor'=>'required|numeric',
        'poverty_gap'=>'required|numeric',
        'severity_of_poverty'=>'required|numeric',
        'population'=>'required|numeric',
        'number_of_poor'=>'required|numeric',
        
        
        

    ];
    public function index()
    {
        $food_estimates = DB::table('poverty_food_estimates_by_residence_and_county')
               ->join('health_counties', 'poverty_food_estimates_by_residence_and_county.county_id', '=', 'health_counties.county_id')->orderBy('poverty_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.Poverty.county.poverty_food_estimates_by_residence_and_county', ['estimate' =>$food_estimates,'counties' =>$counties]);
 
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
                            'headcount_rate'=>'required|numeric',
                            'distribution_of_the_poor'=>'required|numeric',
                            'poverty_gap'=>'required|numeric',
                            'severity_of_poverty'=>'required|numeric',
                            'population'=>'required|numeric',
                            'number_of_poor'=>'required|numeric',
                            
                            
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $food_estimates = new poverty_food_estimates_by_residence_and_county_model();
            $food_estimates->county_id =$request->county_name;
            $food_estimates->headcount_rate=$request->headcount_rate;
            $food_estimates->distribution_of_the_poor=$request->distribution_of_the_poor;         
            $food_estimates->poverty_gap=$request->poverty_gap;
            $food_estimates->severity_of_poverty=$request->severity_of_poverty;
            $food_estimates->population=$request->population;
            $food_estimates->number_of_poor=$request->number_of_poor;
            $food_estimates->save();
             return response()->json($food_estimates);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($poverty_id)
    {
        
          $food_estimates = poverty_food_estimates_by_residence_and_county_model::findOrfail($poverty_id);
     
      
         echo json_encode($food_estimates);
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
                            'headcount_rate'=>'required|numeric',
                            'distribution_of_the_poor'=>'required|numeric',
                            'poverty_gap'=>'required|numeric',
                            'severity_of_poverty'=>'required|numeric',
                            'population'=>'required|numeric',
                            'number_of_poor'=>'required|numeric',
                            
                            
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $food_estimates =poverty_food_estimates_by_residence_and_county_model::find($request->id);
            $food_estimates->county_id =$request->county_name;
            $food_estimates->headcount_rate=$request->headcount_rate;
            $food_estimates->distribution_of_the_poor=$request->distribution_of_the_poor;         
            $food_estimates->poverty_gap=$request->poverty_gap;
            $food_estimates->severity_of_poverty=$request->severity_of_poverty;
            $food_estimates->population=$request->population;
            $food_estimates->number_of_poor=$request->number_of_poor;
            $food_estimates->save();
             return response()->json($food_estimates);
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
