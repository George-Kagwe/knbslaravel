<?php

namespace App\Http\Controllers\Forms\CPI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\CPI\CPIConsumerPriceIndex_Model;
use View;

class CPIConsumerPriceIndex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'month'=>'required|alpha_dash',
      'group'=>'required|alpha_dash',
      'food_and_non_alcoholic_beverages'=>'required|numeric',
      'alcoholic_beverages_tobacco_narcotics'=>'required|numeric',
      'clothing_and_footwear'=>'required|numeric',
      'housing_water_electricity_gas_and_other_fuels'=>'required|numeric',
      'furnishings_household_equipment_routine_household_maintenance'=>'required|numeric',
      'health'=>'required|numeric',
      'transport'=>'required|numeric',
      'communication'=>'required|numeric',
      'recreation_and_culture'=>'required|numeric',
      'education'=>'required|numeric',
      'restaurant_and_hotels'=>'required|numeric',
      'miscellaneous_goods_and_services'=>'required|numeric',
      'total'=>'required|numeric',
      'year'=>'required|numeric'
           
                        
    ];
    public function index()
    {
        //
        $CPIConsumerPriceIndex =CPIConsumerPriceIndex_Model::all();
        
        return view('Forms.CPI.National.cpiconsumerpriceindex',['post' =>$CPIConsumerPriceIndex]);
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
        //
        $validator = \Validator::make($request->all(), [
         'month'=>'required|alpha_dash',
      'group'=>'required|alpha_dash',
      'food_and_non_alcoholic_beverages'=>'required|numeric',
      'alcoholic_beverages_tobacco_narcotics'=>'required|numeric',
      'clothing_and_footwear'=>'required|numeric',
      'housing_water_electricity_gas_and_other_fuels'=>'required|numeric',
      'furnishings_household_equipment_routine_household_maintenance'=>'required|numeric',
      'health'=>'required|numeric',
      'transport'=>'required|numeric',
      'communication'=>'required|numeric',
      'recreation_and_culture'=>'required|numeric',
      'education'=>'required|numeric',
      'restaurant_and_hotels'=>'required|numeric',
      'miscellaneous_goods_and_services'=>'required|numeric',
      'total'=>'required|numeric',
      'year'=>'required|numeric'
           
                        
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $cpi = new CPIConsumerPriceIndex_Model();
            $cpi->month =$request->month;
            $cpi->group=$request->group;
            $cpi->food_and_non_alcoholic_beverages=$request->food_and_non_alcoholic_beverages;
            $cpi->alcoholic_beverages_tobacco_narcotics=$request->alcoholic_beverages_tobacco_narcotics;
            $cpi->clothing_and_footwear=$request->clothing_and_footwear;
            $cpi->housing_water_electricity_gas_and_other_fuels=$request->housing_water_electricity_gas_and_other_fuels;
            $cpi->furnishings_household_equipment_routine_household_maintenance=$request->furnishings_household_equipment_routine_household_maintenance;
            $cpi->health=$request->health;
            $cpi->transport=$request->transport;
            $cpi->communication=$request->communication;
            $cpi->recreation_and_culture=$request->recreation_and_culture;
            $cpi->education=$request->education;
            $cpi->restaurant_and_hotels=$request->restaurant_and_hotels;
            $cpi->miscellaneous_goods_and_services=$request->miscellaneous_goods_and_services;
            $cpi->total=$request->total;
            $cpi->year=$request->year;
            
            $cpi->save();
             return response()->json($cpi);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cpi_retail_price_id)
    {
        //
        $cpi = CPIConsumerPriceIndex_Model::findOrfail($cpi_retail_price_id);

  
          echo json_encode($cpi);
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
        //
        $validator = \Validator::make($request->all(), [
      'month'=>'required|alpha_dash',
      'group'=>'required|alpha_dash',
      'food_and_non_alcoholic_beverages'=>'required|numeric',
      'alcoholic_beverages_tobacco_narcotics'=>'required|numeric',
      'clothing_and_footwear'=>'required|numeric',
      'housing_water_electricity_gas_and_other_fuels'=>'required|numeric',
      'furnishings_household_equipment_routine_household_maintenance'=>'required|numeric',
      'health'=>'required|numeric',
      'transport'=>'required|numeric',
      'communication'=>'required|numeric',
      'recreation_and_culture'=>'required|numeric',
      'education'=>'required|numeric',
      'restaurant_and_hotels'=>'required|numeric',
      'miscellaneous_goods_and_services'=>'required|numeric',
      'total'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $cpi=CPIConsumerPriceIndex_Model::find($request->id);
            $cpi->month =$request->month;
            $cpi->group=$request->group;
            $cpi->food_and_non_alcoholic_beverages=$request->food_and_non_alcoholic_beverages;
            $cpi->alcoholic_beverages_tobacco_narcotics=$request->alcoholic_beverages_tobacco_narcotics;
            $cpi->clothing_and_footwear=$request->clothing_and_footwear;
            $cpi->housing_water_electricity_gas_and_other_fuels=$request->housing_water_electricity_gas_and_other_fuels;
            $cpi->furnishings_household_equipment_routine_household_maintenance=$request->furnishings_household_equipment_routine_household_maintenance;
            $cpi->health=$request->health;
            $cpi->transport=$request->transport;
            $cpi->communication=$request->communication;
            $cpi->recreation_and_culture=$request->recreation_and_culture;
            $cpi->education=$request->education;
            $cpi->restaurant_and_hotels=$request->restaurant_and_hotels;
            $cpi->miscellaneous_goods_and_services=$request->miscellaneous_goods_and_services;
            $cpi->total=$request->total;
            $cpi->year=$request->year;
            $cpi->save();
             return response()->json($cpi);
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
