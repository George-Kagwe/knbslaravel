<?php

namespace App\Http\Controllers\Forms\Energy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Energy\energy_petroleum_supply_and_demand_model;
use View;



class energy_petroleum_supply_and_demand extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
                          'type'=>'required|alpha_dash',
                          'petroleum_product' =>'required|alpha_dash',
                          'quantity_tonnes' =>'required|numeric',
                          'year' =>'required'
    ];
    public function index()
    {
        
        $energy_petroleum_supply_and_demand =energy_petroleum_supply_and_demand_model::all();
        
        return view('forms.energy.national.energy_petroleum_supply_and_demand',['post' =>$energy_petroleum_supply_and_demand]);
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
       
      
                         'type'=>'required|alpha_dash',
                          'petroleum_product' =>'required|alpha_dash',
                          'quantity_tonnes' =>'required|numeric',
                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $supply = new energy_petroleum_supply_and_demand_Model();
            $supply->type =$request->type;
            $supply->petroleum_product=$request->petroleum_product;
            $supply->quantity_tonnes=$request->quantity_tonnes;
            $supply->year=$request->year;

                  $supply->save();
             return response()->json($supply);
    
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($petroleum_id)
    {
       
         
         $supply = energy_petroleum_supply_and_demand_model::findOrfail($petroleum_id);

  
          echo json_encode($supply);     
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
                         'type'=>'required|alpha_dash',
                          'petroleum_product' =>'required|alpha_dash',
                          'quantity_tonnes' =>'required|numeric',
                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $supply =energy_petroleum_supply_and_demand_Model::find($request->id);
            $supply->type =$request->type;
            $supply->petroleum_product=$request->petroleum_product;
            $supply->quantity_tonnes=$request->quantity_tonnes;
           
            $supply->year=$request->year;
            $supply->save();
             return response()->json($supply);
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
