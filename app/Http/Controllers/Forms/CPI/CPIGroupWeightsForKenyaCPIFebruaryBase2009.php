<?php

namespace App\Http\Controllers\Forms\CPI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\CPI\CPIGroupWeightsForKenyaCPIFebruaryBase2009_Model;
use View;

class CPIGroupWeightsForKenyaCPIFebruaryBase2009 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'description'=>'required|alpha_dash',
      'household'=>'required|alpha_dash',
      'group_weights'=>'required|numeric',
      
           
                        
    ];
    public function index()
    {
        //
         $CPIGroupWeightsForKenyaCPIFebruaryBase2009 =CPIGroupWeightsForKenyaCPIFebruaryBase2009_Model::all();
        
        return view('Forms.CPI.National.cpigroupweightsforkenyacpifebuarybase2009',['post' =>$CPIGroupWeightsForKenyaCPIFebruaryBase2009]);

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
      'description'=>'required|alpha_dash',
      'household'=>'required|alpha_dash',
      'group_weights'=>'required|numeric',
      
   
           
                        
        ]);
          if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $group = new CPIGroupWeightsForKenyaCPIFebruaryBase2009_Model();
            
            $group->description=$request->description;
            $group->household=$request->household;
            $group->group_weights=$request->group_weights;
            
            
            $group->save();
             return response()->json($group);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($group_weights_id)
    {
        //
         $group = CPIGroupWeightsForKenyaCPIFebruaryBase2009_Model::findOrfail($group_weights_id);

  
          echo json_encode($group);
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
      'description'=>'required|alpha_dash',
      'household'=>'required|alpha_dash',
      'group_weights'=>'required|numeric',
      
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $group=CPIGroupWeightsForKenyaCPIFebruaryBase2009_Model::find($request->id);
       $group->description=$request->description;
            $group->household=$request->household;
            $group->group_weights=$request->group_weights;
            $group->save();
             return response()->json($group);
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
