<?php

namespace App\Http\Controllers\Forms\Finance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\finance_statement_of_national_government_operations_model;
use View;



class finance_statement_of_national_government_operations extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'national_government_operation'=>'required|alpha',
      'amount_in_millions'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $finance_statement_of_national_government_operations =finance_statement_of_national_government_operations_model::all();
        
        return view('forms.finance.national.finance_statement_of_national_government_operations',['post' =>$finance_statement_of_national_government_operations]);
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
        'national_government_operation'=>'required|alpha',
        'amount_in_millions'=>'required|numeric',
        'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $operations = new finance_statement_of_national_government_operations_model();
            $operations->national_government_operation =$request->national_government_operation;
            $operations->amount_in_millions=$request->amount_in_millions;
            $operations->year=$request->year;
            $operations->save();
             return response()->json($operations);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($operation_id)
    {
       
         
         $operations = finance_statement_of_national_government_operations_model::findOrfail($operation_id);

  
          echo json_encode($operations);     
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
        'national_government_operation'=>'required|alpha',
        'amount_in_millions'=>'required|numeric',
        'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $operations =finance_statement_of_national_government_operations_model::find($request->id);
            $operations->national_government_operation =$request->national_government_operation;
            $operations->amount_in_millions=$request->amount_in_millions;
   
            $operations->year=$request->year;
            $operations->save();
             return response()->json($operations);
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
