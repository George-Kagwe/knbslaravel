<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\agriculture_chemical_med_feed_input_model;
use View;



class agriculture_chemical_med_feed_input extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'cattle_feed'=>'required|numeric',
      'dips_spray_fluids'=>'required|numeric',
      'fungicides'=>'required|numeric',
      'herbicides'=>'required|numeric',
       'insecticides'=>'required|numeric',
      'other_feeds'=>'required|numeric',
      'other_livestock_drugs'=>'required|numeric',
      'pig_feed'=>'required|numeric',
       'plant_hormones'=>'required|numeric',
      'poultry_feed'=>'required|numeric',
      'vaccines'=>'required|numeric',
      'year'=>'required|numeric',
                              
                                                    
                        
    ];
    public function index()
    {
        
        $agriculture_chemical_med_feed_input =agriculture_chemical_med_feed_input_model::all();
        
        return view('forms.agriculture.national.agriculture_chemical_med_feeds',['post' =>$agriculture_chemical_med_feed_input]);
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
      'cattle_feed'=>'required|numeric',
      'dips_spray_fluids'=>'required|numeric',
      'fungicides'=>'required|numeric',
      'herbicides'=>'required|numeric',
     'insecticides'=>'required|numeric',
      'other_feeds'=>'required|numeric',
      'other_livestock_drugs'=>'required|numeric',
      'pig_feed'=>'required|numeric',
       'plant_hormones'=>'required|numeric',
      'poultry_feed'=>'required|numeric',
      'vaccines'=>'required|numeric',
      'year'=>'required|numeric',
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $chemical = new agriculture_chemical_med_feed_input_model();
            $chemical->cattle_feed =$request->cattle_feed;
            $chemical->dips_spray_fluids=$request->dips_spray_fluids;
            $chemical->fungicides=$request->fungicides;
            $chemical->herbicides =$request->herbicides;
            $chemical->insecticides=$request->insecticides;
            $chemical->other_feeds=$request->other_feeds;
            $chemical->other_livestock_drugs =$request->other_livestock_drugs;
            $chemical->pig_feed=$request->pig_feed;
            $chemical->plant_hormones=$request->plant_hormones;
            $chemical->poultry_feed=$request->poultry_feed;
            $chemical->vaccines=$request->vaccines;
            $chemical->year=$request->year;
            $chemical->save();
             return response()->json($chemical);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($chemical_med_feed_inputs_id)
    {
       
         
         $chemical = agriculture_chemical_med_feed_input_model::findOrfail($chemical_med_feed_inputs_id);

  
          echo json_encode($chemical);     
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
      'cattle_feed'=>'required|numeric',
      'dips_spray_fluids'=>'required|numeric',
      'fungicides'=>'required|numeric',
      'herbicides'=>'required|numeric',
     'insecticides'=>'required|numeric',
      'other_feeds'=>'required|numeric',
      'other_livestock_drugs'=>'required|numeric',
      'pig_feed'=>'required|numeric',
       'plant_hormones'=>'required|numeric',
      'poultry_feed'=>'required|numeric',
      'vaccines'=>'required|numeric',
      'year'=>'required|numeric'
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $chemical =agriculture_chemical_med_feed_input_model::find($request->id);
            $chemical->cattle_feed =$request->cattle_feed;
            $chemical->dips_spray_fluids=$request->dips_spray_fluids;
            $chemical->fungicides=$request->fungicides;
            $chemical->herbicides =$request->herbicides;
            $chemical->insecticides=$request->insecticides;
            $chemical->other_feeds=$request->other_feeds;
            $chemical->other_livestock_drugs =$request->other_livestock_drugs;
            $chemical->pig_feed=$request->pig_feed;
            $chemical->plant_hormones=$request->plant_hormones;
            $chemical->poultry_feed=$request->poultry_feed;
            $chemical->vaccines=$request->vaccines;
            $chemical->save();
             return response()->json($chemical);
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
