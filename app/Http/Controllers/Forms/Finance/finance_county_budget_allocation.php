<?php

namespace App\Http\Controllers\Forms\Finance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\finance_county_budget_allocation_Model;
use View;
class finance_county_budget_allocation extends Controller
{
    protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'recurrent' =>'required|numeric',
                          'development' =>'required|numeric',
                          'total_allocation' =>'required|numeric',
                  
                          'other_commodities' =>'required|numeric',
                          'total' =>'required|numeric',
                          'year' =>'required|numeric'
    ];
    public function index()
    {
        //fetch all records

        $finance_county_budget_allocation =finance_county_budget_allocation_Model::all();
        
        return view('forms.finance.national.finance_county_budget_allocation',['post' =>$finance_county_budget_allocation]);

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
     
                          'county_id'=>'required|numeric',
                          'recurrent' =>'required|numeric',
                          'development' =>'required|numeric',
                          'total_allocation' =>'required|numeric',
                          'other_commodities' =>'required|numeric',
                          'total' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $allocation = new finance_county_budget_allocation_Model();
            $allocation->county_id =$request->county_id;
            $allocation->recurrent=$request->recurrent;
            $allocation->development=$request->development;
            $allocation->total_allocation=$request->total_allocation;
      
            $allocation->other_commodities=$request->other_commodities;
            $allocation->total=$request->total;
         
            $allocation->year=$request->year;
            $allocation->save();
             return response()->json($allocation);
           echo json_encode(array("status" => TRUE));

        }   

         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($budget_allocation_ID)
    {
            
         
         $allocation = finance_county_budget_allocation_Model::findOrfail($budget_allocation_ID);

  
          echo json_encode($allocation);    


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
     
                          'county_id'=>'required|numeric',
                          'recurrent' =>'required|numeric',
                          'development' =>'required|numeric',
                          'total_allocation' =>'required|numeric',
                    
                        
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $allocation =finance_county_budget_allocation_Model::find($request->id);
            $allocation->county_id =$request->county_id;
            $allocation->recurrent=$request->recurrent;
            $allocation->development=$request->development;
            $allocation->total_allocation=$request->total_allocation;


            $allocation->year=$request->year;
            $allocation->save();
             return response()->json($allocation);
           echo json_encode(array("status" => TRUE));

        }       }

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
