<?php

namespace App\Http\Controllers\Forms\Poverty;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Poverty\poverty_hardcore_estimates_by_residence_and_county_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//Poverty hardcore estimate by county and residence
  
class poverty_hardcore_estimates_by_residence_and_county extends Controller
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
        $hardcore_estimates = DB::table('poverty_hardcore_estimates_by_residence_and_county')
               ->join('health_counties', 'poverty_hardcore_estimates_by_residence_and_county.county_id', '=', 'health_counties.county_id')->orderBy('poverty_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.Poverty.county.poverty_hardcore_estimates_by_residence_and_county', ['estimate' =>$hardcore_estimates,'counties' =>$counties]);
 
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
            $hardcore_estimates = new poverty_hardcore_estimates_by_residence_and_county_model();
            $hardcore_estimates->county_id =$request->county_name;
            $hardcore_estimates->headcount_rate=$request->headcount_rate;
            $hardcore_estimates->distribution_of_the_poor=$request->distribution_of_the_poor;         
            $hardcore_estimates->poverty_gap=$request->poverty_gap;
            $hardcore_estimates->severity_of_poverty=$request->severity_of_poverty;
            $hardcore_estimates->population=$request->population;
            $hardcore_estimates->number_of_poor=$request->number_of_poor;
            $hardcore_estimates->save();
             return response()->json($hardcore_estimates);
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
        
          $hardcore_estimates = poverty_hardcore_estimates_by_residence_and_county_model::findOrfail($poverty_id);
     
      
         echo json_encode($hardcore_estimates);
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
            $hardcore_estimates =poverty_hardcore_estimates_by_residence_and_county_model::find($request->id);
            $hardcore_estimates->county_id =$request->county_name;
            $hardcore_estimates->headcount_rate=$request->headcount_rate;
            $hardcore_estimates->distribution_of_the_poor=$request->distribution_of_the_poor;         
            $hardcore_estimates->poverty_gap=$request->poverty_gap;
            $hardcore_estimates->severity_of_poverty=$request->severity_of_poverty;
            $hardcore_estimates->population=$request->population;
            $hardcore_estimates->number_of_poor=$request->number_of_poor;
            $hardcore_estimates->save();
             return response()->json($hardcore_estimates);
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
