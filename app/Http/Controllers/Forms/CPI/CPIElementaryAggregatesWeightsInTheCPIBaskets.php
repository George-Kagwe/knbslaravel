<?php

namespace App\Http\Controllers\Forms\CPI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\CPI\CPIElementaryAggregatesWeightsInTheCPIBaskets_Model;
use View;

class CPIElementaryAggregatesWeightsInTheCPIBaskets extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      protected $rules =
    [
      'coicop_code'=>'required|alpha_num',
      'description'=>'required|alpha_dash',
      'nairobi_lower'=>'required|numeric',
      'nairobi_middle'=>'required|numeric',
      'nairobi_upper'=>'required|numeric',
      'rest_of_urban_areas'=>'required|numeric',
      'kenya'=>'required|numeric',
   
           
                        
    ];
    public function index()
    {
        //
        $CPIElementaryAggregatesWeightsInTheCPIBaskets =CPIElementaryAggregatesWeightsInTheCPIBaskets_Model::all();
        
        return view('Forms.CPI.National.cpielementaryaggregatesweightsinthecpibaskets',['post' =>$CPIElementaryAggregatesWeightsInTheCPIBaskets]);

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
        'coicop_code'=>'required|alpha_num',
      'description'=>'required|alpha_dash',
      'nairobi_lower'=>'required|numeric',
      'nairobi_middle'=>'required|numeric',
      'nairobi_upper'=>'required|numeric',
      'rest_of_urban_areas'=>'required|numeric',
      'kenya'=>'required|numeric',
   
           
                        
        ]);
          if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $aggregate = new CPIElementaryAggregatesWeightsInTheCPIBaskets_Model();
            $aggregate->coicop_code =$request->coicop_code;
            $aggregate->description=$request->description;
            $aggregate->nairobi_lower=$request->nairobi_lower;
            $aggregate->nairobi_middle=$request->nairobi_middle;
            $aggregate->nairobi_upper=$request->nairobi_upper;
            $aggregate->rest_of_urban_areas=$request->rest_of_urban_areas;
            $aggregate->kenya=$request->kenya;
           
            
            $aggregate->save();
             return response()->json($aggregate);
           echo json_encode(array("status" => TRUE));

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($aggregate_weights_id)
    {
        //
         $aggregate = CPIElementaryAggregatesWeightsInTheCPIBaskets_Model::findOrfail($aggregate_weights_id);

  
          echo json_encode($aggregate);
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
      'coicop_code'=>'required|alpha_num',
      'description'=>'required|alpha_dash',
      'nairobi_lower'=>'required|numeric',
      'nairobi_middle'=>'required|numeric',
      'nairobi_upper'=>'required|numeric',
      'rest_of_urban_areas'=>'required|numeric',
      'kenya'=>'required|numeric',
   
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $aggregate=CPIElementaryAggregatesWeightsInTheCPIBaskets_Model::find($request->id);
                $aggregate->coicop_code =$request->coicop_code;
            $aggregate->description=$request->description;
            $aggregate->nairobi_lower=$request->nairobi_lower;
            $aggregate->nairobi_middle=$request->nairobi_middle;
            $aggregate->nairobi_upper=$request->nairobi_upper;
            $aggregate->rest_of_urban_areas=$request->rest_of_urban_areas;
            $aggregate->kenya=$request->kenya;
           
            $aggregate->save();
             return response()->json($aggregate);
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
