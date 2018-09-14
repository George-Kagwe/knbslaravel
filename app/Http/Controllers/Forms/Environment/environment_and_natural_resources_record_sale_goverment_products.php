<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_record_sale_goverment_products_Model;
use View;

class environment_and_natural_resources_record_sale_goverment_products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'soft_wood'=>'required|numeric',
      'fuelwood_charcoa'=>'required|numeric', 
      'power_and_telegraph'=>'required|numeric', 
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_record_sale_goverment_products =environment_and_natural_resources_record_sale_goverment_products_Model::all();
        
        return view('forms.environment.national.naturalresourcesrecordsalegovermentproducts',['post' =>$environment_and_natural_resources_record_sale_goverment_products]);
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
      'soft_wood'=>'required|numeric',
      'fuelwood_charcoal'=>'required|numeric', 
      'power_and_telegraph'=>'required|numeric',     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $products = new  environment_and_natural_resources_record_sale_goverment_products_Model();
            $products->soft_wood =$request->soft_wood;
            $products->fuelwood_charcoal=$request->fuelwood_charcoal;
            $products->power_and_telegraph=$request->power_and_telegraph;
            
            $products->year=$request->year;
            $products->save();
             return response()->json($products);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($record_id)
    {
       
         
         $products = environment_and_natural_resources_record_sale_goverment_products_Model::findOrfail($record_id);

  
          echo json_encode($products);     
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
        'soft_wood'=>'required|numeric',
      'fuelwood_charcoal'=>'required|numeric',  
      'power_and_telegraph'=>'required|numeric',     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $products=environment_and_natural_resources_record_sale_goverment_products_Model::find($request->id);
            $products->soft_wood=$request->soft_wood;
            $products->fuelwood_charcoal=$request->fuelwood_charcoal;
             $products->power_and_telegraph=$request->power_and_telegraph;
           
            $products->year=$request->year;
            $products->save();
             return response()->json($products);
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
