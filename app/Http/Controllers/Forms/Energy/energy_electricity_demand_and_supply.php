<?php

namespace App\Http\Controllers\Forms\Energy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Energy\energy_electricity_demand_and_supply_model;
use View;



class energy_electricity_demand_and_supply extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      
                          'demand_supply'=>'required|alpha_dash',
                          'capacity_megawatts' =>'required|numeric',

                          'year' =>'required'
    ];
    public function index()
    {
        
        $energy_electricity_demand_and_supply =energy_electricity_demand_and_supply_model::all();
        
        return view('forms.energy.national.energy_electricity_demand_and_supply',['post' =>$energy_electricity_demand_and_supply]);
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
       
      
                          'demand_supply'=>'required|alpha_dash',
                          'capacity_megawatts' =>'required|numeric',
                        
                        

                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $sale = new energy_electricity_demand_and_supply_Model();
            $sale->demand_supply =$request->demand_supply;
            $sale->capacity_megawatts=$request->capacity_megawatts;
        
            $sale->year=$request->year;

                  $sale->save();
             return response()->json($sale);
    
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($domestic_sale_id)
    {
       
         
         $sale = energy_electricity_demand_and_supply_model::findOrfail($domestic_sale_id);

  
          echo json_encode($sale);     
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
                          'demand_supply'=>'required|alpha_dash',
                          'capacity_megawatts' =>'required|numeric',
                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $sale =energy_electricity_demand_and_supply_Model::find($request->id);
            $sale->demand_supply =$request->demand_supply;
            $sale->capacity_megawatts=$request->capacity_megawatts;
        
           
            $sale->year=$request->year;
            $sale->save();
             return response()->json($sale);
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
