<?php

namespace App\Http\Controllers\Forms\Finance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\finance_outstanding_debt_lending_country_model;
use View;



class finance_outstanding_debt_lending_country extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      
                          'germany'=>'required|numeric',
                          'japan' =>'required|numeric',
                          'france' =>'required|numeric',
                          'usa' =>'required|numeric',
                  
                          'netherlands' =>'required|numeric',
                          'denmark' =>'required|numeric',
                          'finland' =>'required|numeric',
                          'china' =>'required|numeric',
                          'belgium' =>'required|numeric',
                          'other' =>'required|numeric',

                          'year' =>'required|numeric'
    ];
    public function index()
    {
        
        $finance_outstanding_debt_lending_country =finance_outstanding_debt_lending_country_model::all();
        
        return view('forms.finance.national.finance_outstanding_debt_lending_country',['post' =>$finance_outstanding_debt_lending_country]);
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
       
      
                          'germany'=>'required|numeric',
                          'japan' =>'required|numeric',
                          'france' =>'required|numeric',
                          'usa' =>'required|numeric',
                  
                          'netherlands' =>'required|numeric',
                          'denmark' =>'required|numeric',
                          'finland' =>'required|numeric',
                          'china' =>'required|numeric',
                          'belgium' =>'required|numeric',
                          'other' =>'required|numeric',

                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $country = new finance_outstanding_debt_lending_country_Model();
            $country->germany =$request->germany;
            $country->japan=$request->japan;
            $country->france=$request->france;
            $country->usa=$request->usa;
      
            $country->netherlands=$request->netherlands;
            $country->denmark=$request->denmark;
               

            $country->finland=$request->finland;      
            $country->china=$request->china;
            $country->belgium=$request->belgium;
            $country->other=$request->other;
            $country->year=$request->year;

                  $country->save();
             return response()->json($country);
    
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lending_country_id)
    {
       
         
         $country = finance_outstanding_debt_lending_country_model::findOrfail($lending_country_id);

  
          echo json_encode($country);     
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
        'germany'=>'required|numeric',
                          'japan' =>'required|numeric',
                          'france' =>'required|numeric',
                          'usa' =>'required|numeric',
                  
                          'netherlands' =>'required|numeric',
                          'denmark' =>'required|numeric',
                          'finland' =>'required|numeric',
                          'china' =>'required|numeric',
                          'belgium' =>'required|numeric',
                          'other' =>'required|numeric',

                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $country =finance_outstanding_debt_lending_country_Model::find($request->id);
            $country->germany =$request->germany;
            $country->japan=$request->japan;
            $country->france=$request->france;
            $country->usa=$request->usa;
      
            $country->netherlands=$request->netherlands;
            $country->denmark=$request->denmark;
               

            $country->finland=$request->finland;      
            $country->china=$request->china;
            $country->belgium=$request->belgium;
            $country->other=$request->other;
            $country->year=$request->year;
            $country->save();
             return response()->json($country);
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
