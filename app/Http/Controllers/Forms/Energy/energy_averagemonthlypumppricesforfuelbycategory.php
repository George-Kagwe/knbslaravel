<?php

namespace App\Http\Controllers\Forms\Energy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Energy\energy_averagemonthlypumppricesforfuelbycategory_model;
use View;
use Illuminate\Support\Facades\DB;


//@Charles Ndirangu
//Average Monthly Pump Prices For Fuel By Category

class energy_averagemonthlypumppricesforfuelbycategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
*/
     protected $rules = [ 
        'county_name'=>'required',
        'month_id'=>'required|numeric',
        'super_petrol'=>'required|numeric',
        'diesel'=>'required|numeric',
        'kerosene'=>'required|numeric',
        'year'=>'required|numeric'
 
    ];
    public function index()
    {
         $fuel_prices = DB::table('energy_averagemonthlypumppricesforfuelbycategory')
               ->join('health_counties', 'energy_averagemonthlypumppricesforfuelbycategory.county_id', '=', 'health_counties.county_id') 
                ->join('health_months', 'energy_averagemonthlypumppricesforfuelbycategory.month_id', '=', 'health_months.month_id')->orderBy('count_id', 'ASC')->get();

        

        $counties = DB::table('health_counties')->get();
        $months = DB::table('health_months')->get();

        return view('Forms.Energy.county.energy_averagemonthlypumppricesforfuelbycategory', ['fuel_prices' =>$fuel_prices,'counties' =>$counties,'months' =>$months]);
 

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
                          'county_name'=>'required',
                          'month'=>'required',
                          'super_petrol'=>'required|numeric',
                          'diesel'=>'required|numeric',
                          'kerosene'=>'required|numeric',
                          'year'=>'required',
        ]);
         

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $fuel_prices = new energy_averagemonthlypumppricesforfuelbycategory_model();
            $fuel_prices->county_id =$request->county_name;
            $fuel_prices->month_id=$request->month;
            $fuel_prices->super_petrol=$request->super_petrol;         
            $fuel_prices->diesel=$request->diesel;
            $fuel_prices->kerosene=$request->kerosene;
            $fuel_prices->year=$request->year;
            $fuel_prices->save();
            return response()->json($fuel_prices);
            echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   
    public function show($count_id)
    {
        
          $fuel_price = energy_averagemonthlypumppricesforfuelbycategory_model::findOrfail($count_id);
           
         echo json_encode($fuel_price);
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
                          'month'=>'required',
                          'super_petrol'=>'required|numeric',
                          'diesel'=>'required|numeric',
                         'kerosene'=>'required|numeric',
                          'year'=>'required',

       
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{

            $fuel_price =energy_averagemonthlypumppricesforfuelbycategory_model::find($request->id);
            $fuel_price->county_id =$request->county_name;
            $fuel_price->month_id=$request->month;
            $fuel_price->super_petrol=$request->super_petrol;         
            $fuel_price->diesel=$request->diesel;
            $fuel_price->kerosene=$request->kerosene;
            $fuel_price->year=$request->year;
            $fuel_price->save();
             return response()->json($fuel_price);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function get_subcounties($id)
    // {
    //      $subcounties = DB::table('health_months')
    //            ->where('month_id',  '=', $id)               
    //             ->get();

    //     return  json_encode($subcounties);
    // }    
    public function destroy($id)
    {
        //

    }
}
