<?php

namespace App\Http\Controllers\Forms\Energy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Energy\energy_value_and_quantity_of_imports_exports_model;
use View;



class energy_value_and_quantity_of_imports_exports extends Controller
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
                            'value_millions' =>'required|numeric',
                          'year' =>'required'
    ];
    public function index()
    {
        
        $energy_value_and_quantity_of_imports_exports =energy_value_and_quantity_of_imports_exports_model::all();
        
        return view('forms.energy.national.energy_value_and_quantity_of_imports_exports',['post' =>$energy_value_and_quantity_of_imports_exports]);
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
                           'value_millions' =>'required|numeric',
                          
                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $value = new energy_value_and_quantity_of_imports_exports_Model();
            $value->type =$request->type;
            $value->petroleum_product=$request->petroleum_product;
            $value->quantity_tonnes=$request->quantity_tonnes;
            $value->value_millions=$request->value_millions;
            $value->year=$request->year;

                  $value->save();
             return response()->json($value);
    
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
       
         
         $value = energy_value_and_quantity_of_imports_exports_model::findOrfail($petroleum_id);

  
          echo json_encode($value);     
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
                            'value_millions' =>'required|numeric',
                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $value =energy_value_and_quantity_of_imports_exports_Model::find($request->id);
            $value->type =$request->type;
            $value->petroleum_product=$request->petroleum_product;
            $value->quantity_tonnes=$request->quantity_tonnes;
           $value->value_millions=$request->value_millions;
            $value->year=$request->year;
            $value->save();
             return response()->json($value);
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
