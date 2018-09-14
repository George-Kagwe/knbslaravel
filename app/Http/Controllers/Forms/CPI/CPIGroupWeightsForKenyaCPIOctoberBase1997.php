<?php

namespace App\Http\Controllers\Forms\CPI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\CPI\CPIGroupWeightsForKenyaCPIOctoberBase1997_Model;
use View;

class CPIGroupWeightsForKenyaCPIOctoberBase1997 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'item_group'=>'required|alpha_dash',
      'household'=>'required|alpha_dash',
      'group_weights'=>'required|numeric',
      
           
                        
    ];
    public function index()
    {
        //
         $CPIGroupWeightsForKenyaCPIOctoberBase1997 =CPIGroupWeightsForKenyaCPIOctoberBase1997_Model::all();
        
        return view('Forms.CPI.National.cpigroupweightsforkenyacpioctoberbase1997',['post' =>$CPIGroupWeightsForKenyaCPIOctoberBase1997]);

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
      'item_group'=>'required|alpha_dash',
      'household'=>'required|alpha_dash',
      'group_weights'=>'required|numeric',
      
   
           
                        
        ]);
          if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $items = new CPIGroupWeightsForKenyaCPIOctoberBase1997_Model();
            
            $items->item_group=$request->item_group;
            $items->household=$request->household;
            $items->group_weights=$request->group_weights;
            
            
            $items->save();
             return response()->json($items);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($group_weight_id)
    {
        //
         $items = CPIGroupWeightsForKenyaCPIOctoberBase1997_Model::findOrfail($group_weight_id);

  
          echo json_encode($items);
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
      'item_group'=>'required|alpha_dash',
      'household'=>'required|alpha_dash',
      'group_weights'=>'required|numeric',
      
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $items=CPIGroupWeightsForKenyaCPIOctoberBase1997_Model::find($request->id);
       $items->item_group=$request->item_group;
            $items->household=$request->household;
            $items->group_weights=$request->group_weights;
            $items->save();
             return response()->json($items);
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
