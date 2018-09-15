<?php

namespace App\Http\Controllers\Forms\Poverty;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Poverty\poverty_distribution_of_household_food_consumption_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//pverty distribution of household food consumption

class poverty_distribution_of_household_food_consumption extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'purchases'=>'required|numeric',
        'stock'=>'required|numeric',
        'own_production'=>'required|numeric',
        'gifts'=>'required|numeric',

    ];
    public function index()
    {
        $food_consumption = DB::table('poverty_distribution_of_household_food_consumption')
               ->join('health_counties', 'poverty_distribution_of_household_food_consumption.county_id', '=', 'health_counties.county_id')->orderBy('poverty_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.Poverty.county.poverty_distribution_of_household_food_consumption', ['consumption' =>$food_consumption,'counties' =>$counties]);
 
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
                          'purchases'=>'required|numeric',
                          'stock'=>'required|numeric',
                          'own_production'=>'required|numeric',
                          'gifts'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $consumption = new poverty_distribution_of_household_food_consumption_model();
            $consumption->county_id =$request->county_name;
            $consumption->purchases=$request->purchases;
            $consumption->stock=$request->stock;         
            $consumption->own_production=$request->own_production;
            $consumption->gifts=$request->gifts;
            $consumption->save();
             return response()->json($consumption);
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
        
          $consumption = poverty_distribution_of_household_food_consumption_model::findOrfail($poverty_id);
     
      
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
                          'purchases'=>'required|numeric',
                          'stock'=>'required|numeric',
                          'own_production'=>'required|numeric',
                          'gifts'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $consumption =poverty_distribution_of_household_food_consumption_model::find($request->id);
            $consumption->county_id =$request->county_name;
            $consumption->purchases=$request->purchases;
            $consumption->stock=$request->stock;         
            $consumption->own_production=$request->own_production;
            $consumption->gifts=$request->gifts;
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
