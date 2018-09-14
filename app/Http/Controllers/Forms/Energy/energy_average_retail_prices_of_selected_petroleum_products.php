<?php

namespace App\Http\Controllers\Forms\Energy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Energy\energy_average_retail_prices_of_selected_petroleum_products_model;
use View;



class energy_average_retail_prices_of_selected_petroleum_products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      
                          'petroleum_product'=>'required|alpha_dash',
                          'retail_price_ksh' =>'required|numeric',
                          'month' =>'required|alpha_dash',
                        

                          'year' =>'required'
    ];
    public function index()
    {
        
        $energy_average_retail_prices_of_selected_petroleum_products =energy_average_retail_prices_of_selected_petroleum_products_model::all();
        
        return view('forms.energy.national.energy_average_retail_prices_of_selected_petroleum_products',['post' =>$energy_average_retail_prices_of_selected_petroleum_products]);
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
       
      
                          'petroleum_product'=>'required|alpha_dash',
                          'retail_price_ksh' =>'required|numeric',
                                   'month' =>'required|alpha_dash',
                        

                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $retail = new energy_average_retail_prices_of_selected_petroleum_products_Model();
            $retail->petroleum_product =$request->petroleum_product;
            $retail->retail_price_ksh=$request->retail_price_ksh;
            $retail->month=$request->month;
            $retail->year=$request->year;

                  $retail->save();
             return response()->json($retail);
    
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($retail_price_id)
    {
       
         
         $retail = energy_average_retail_prices_of_selected_petroleum_products_model::findOrfail($retail_price_id);

  
          echo json_encode($retail);     
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
                         'petroleum_product'=>'required|alpha_dash',
                          'retail_price_ksh' =>'required|numeric',
                          'month' =>'required|alpha_dash',
                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $retail =energy_average_retail_prices_of_selected_petroleum_products_Model::find($request->id);
            $retail->petroleum_product =$request->petroleum_product;
            $retail->retail_price_ksh=$request->retail_price_ksh;
            $retail->month=$request->month;
           
            $retail->year=$request->year;
            $retail->save();
             return response()->json($retail);
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
