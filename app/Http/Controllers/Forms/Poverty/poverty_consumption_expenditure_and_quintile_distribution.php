<?php

namespace App\Http\Controllers\Forms\Poverty;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Poverty\poverty_consumption_expenditure_and_quintile_distribution_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//consumption expenditure
  
class poverty_consumption_expenditure_and_quintile_distribution extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'mean'=>'required|numeric',
        'median'=>'required|numeric',
        'quarter1'=>'required|numeric',
        'quarter2'=>'required|numeric',
        'quarter3'=>'required|numeric',
        'quarter4'=>'required|numeric',
        'quarter5'=>'required|numeric',
        

    ];
    public function index()
    {
        $consumption = DB::table('poverty_consumption_expenditure_and_quintile_distribution')
               ->join('health_counties', 'poverty_consumption_expenditure_and_quintile_distribution.county_id', '=', 'health_counties.county_id')->orderBy('poverty_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.Poverty.county.poverty_consumption_expenditure_and_quintile_distribution', ['consumptions' =>$consumption,'counties' =>$counties]);
 
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
                            'mean'=>'required|numeric',
                            'median'=>'required|numeric',
                            'quarter1'=>'required|numeric',
                            'quarter2'=>'required|numeric',
                            'quarter3'=>'required|numeric',
                            'quarter4'=>'required|numeric',
                            'quarter5'=>'required|numeric',
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $consumptions = new poverty_consumption_expenditure_and_quintile_distribution_model();
            $consumptions->county_id =$request->county_name;
            $consumptions->mean=$request->mean;
            $consumptions->median=$request->median;         
            $consumptions->quarter1=$request->quarter1;
            $consumptions->quarter2=$request->quarter2;
            $consumptions->quarter3=$request->quarter3;
            $consumptions->quarter4=$request->quarter4;
            $consumptions->quarter5=$request->quarter5;
            $consumptions->save();
             return response()->json($consumptions);
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
        
          $consumption = poverty_consumption_expenditure_and_quintile_distribution_model::findOrfail($poverty_id);
     
      
         echo json_encode($consumption);
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
                            'mean'=>'required|numeric',
                            'median'=>'required|numeric',
                            'quarter1'=>'required|numeric',
                            'quarter2'=>'required|numeric',
                            'quarter3'=>'required|numeric',
                            'quarter4'=>'required|numeric',
                            'quarter5'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $consumption =poverty_consumption_expenditure_and_quintile_distribution_model::find($request->id);
            $consumption->county_id =$request->county_name;
            $consumption->mean=$request->mean;
            $consumption->median=$request->median;         
            $consumption->quarter1=$request->quarter1;
            $consumption->quarter2=$request->quarter2;
            $consumption->quarter3=$request->quarter3;
            $consumption->quarter4=$request->quarter4;
            $consumption->quarter5=$request->quarter5;
            $consumption->save();
             return response()->json($consumption);
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
