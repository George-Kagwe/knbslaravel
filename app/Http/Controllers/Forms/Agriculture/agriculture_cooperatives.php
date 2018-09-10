<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\agriculture_cooperatives_model;
use View;



class agriculture_cooperatives extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'coffee'=>'required|numeric',
      'cotton'=>'required|numeric',
      'pyrethrum'=>'required|numeric',
      'sugar'=>'required|numeric',
       'dairy'=>'required|numeric',
      'multi_purpose'=>'required|numeric',
      'farm_purchase'=>'required|numeric',
      'fisheries'=>'required|numeric',
       'other_agricultural'=>'required|numeric',
      'saccos'=>'required|numeric',
      'consumer'=>'required|numeric',
      'housing'=>'required|numeric',
                              
    'craftsmen'=>'required|numeric',
       'transport'=>'required|numeric',
      'other_non_agricultur'=>'required|numeric',
      'unions'=>'required|numeric',
      'year'=>'required|numeric',                                       
                        
    ];
    public function index()
    {
        
        $agriculture_cooperatives =agriculture_cooperatives_model::all();
        
        return view('forms.agriculture.national.agriculture_cooperatives',['post' =>$agriculture_cooperatives]);
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
    'coffee'=>'required|numeric',
      'cotton'=>'required|numeric',
      'pyrethrum'=>'required|numeric',
      'sugar'=>'required|numeric',
       'dairy'=>'required|numeric',
      'multi_purpose'=>'required|numeric',
      'farm_purchase'=>'required|numeric',
      'fisheries'=>'required|numeric',
       'other_agricultural'=>'required|numeric',
      'saccos'=>'required|numeric',
      'consumer'=>'required|numeric',
      'housing'=>'required|numeric',
                              
    'craftsmen'=>'required|numeric',
       'transport'=>'required|numeric',
      'other_non_agricultur'=>'required|numeric',
      'unions'=>'required|numeric',
      'year'=>'required|numeric',                                       
                        
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $cooperatives = new agriculture_cooperatives_model();
            $cooperatives->coffee =$request->coffee;
            $cooperatives->cotton=$request->cotton;
            $cooperatives->pyrethrum=$request->pyrethrum;
            $cooperatives->sugar =$request->sugar;
            $cooperatives->dairy=$request->dairy;
            $cooperatives->multi_purpose=$request->multi_purpose;
            $cooperatives->farm_purchase =$request->farm_purchase;
            $cooperatives->fisheries=$request->fisheries;
            $cooperatives->other_agricultural=$request->other_agricultural;
            $cooperatives->saccos=$request->saccos;
            $cooperatives->consumer=$request->consumer;
            $cooperatives->housing=$request->housing;
            $cooperatives->craftsmen=$request->craftsmen;
            $cooperatives->transport=$request->transport;
            $cooperatives->other_non_agricultur=$request->other_non_agricultur;
            $cooperatives->consumer=$request->consumer;
            $cooperatives->unions=$request->unions;
            $cooperatives->year=$request->year;
            $cooperatives->save();
             return response()->json($cooperatives);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cooperatives_id)
    {
       
         
         $cooperatives = agriculture_cooperatives_model::findOrfail($cooperatives_id);

  
          echo json_encode($cooperatives);     
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
     'coffee'=>'required|numeric',
      'cotton'=>'required|numeric',
      'pyrethrum'=>'required|numeric',
      'sugar'=>'required|numeric',
       'dairy'=>'required|numeric',
      'multi_purpose'=>'required|numeric',
      'farm_purchase'=>'required|numeric',
      'fisheries'=>'required|numeric',
       'other_agricultural'=>'required|numeric',
      'saccos'=>'required|numeric',
      'consumer'=>'required|numeric',
      'housing'=>'required|numeric',
                              
    'craftsmen'=>'required|numeric',
       'transport'=>'required|numeric',
      'other_non_agricultur'=>'required|numeric',
      'unions'=>'required|numeric',
      'year'=>'required|numeric',                                       
                        
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $cooperatives =agriculture_cooperatives_model::find($request->id);
            $cooperatives->coffee =$request->coffee;
            $cooperatives->cotton=$request->cotton;
            $cooperatives->pyrethrum=$request->pyrethrum;
            $cooperatives->sugar =$request->sugar;
            $cooperatives->dairy=$request->dairy;
            $cooperatives->multi_purpose=$request->multi_purpose;
            $cooperatives->farm_purchase =$request->farm_purchase;
            $cooperatives->fisheries=$request->fisheries;
            $cooperatives->other_agricultural=$request->other_agricultural;
            $cooperatives->saccos=$request->saccos;
            $cooperatives->consumer=$request->consumer;
            $cooperatives->save();
             return response()->json($cooperatives);
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
