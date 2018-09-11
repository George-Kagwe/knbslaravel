<?php

namespace App\Http\Controllers\Forms\Finance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\finance_national_government_expenditure_model;
use View;
class finance_national_government_expenditure extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


       protected $rules =
    [
      'acquisition_nonfinancial_assets'=>'required|numeric',
      'acquisition_financial_assets'=>'required|numeric',
      'loans_repayments'=>'required|numeric',
      'compensation_employees'=>'required|numeric',
      'goods_services'=>'required|numeric',
      'subsidies'=>'required|numeric',
      'interest'=>'required|numeric',
      'grants'=>'required|numeric',
      'other_expense'=>'required|numeric',
      'social_benefits'=>'required|numeric',
      'capital_grants'=>'required|numeric',
      'total'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
       $finance_national_government_expenditure =finance_national_government_expenditure_model::all();
        
        return view('forms.finance.national.finance_national_government_expenditure',['post' =>$finance_national_government_expenditure]);
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
      'acquisition_nonfinancial_assets'=>'required|numeric',
      'acquisition_financial_assets'=>'required|numeric',
      'loans_repayments'=>'required|numeric',
      'compensation_employees'=>'required|numeric',
      'goods_services'=>'required|numeric',
      'subsidies'=>'required|numeric',
      'interest'=>'required|numeric',
      'grants'=>'required|numeric',
      'other_expense'=>'required|numeric',
      'social_benefits'=>'required|numeric',
      'capital_grants'=>'required|numeric',
      'total'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $expenditure = new finance_national_government_expenditure_model();
            $expenditure->acquisition_nonfinancial_assets =$request->acquisition_nonfinancial_assets;
            $expenditure->acquisition_financial_assets =$request->acquisition_financial_assets;
            $expenditure->loans_repayments=$request->loans_repayments;
            $expenditure->compensation_employees=$request->compensation_employees;
            $expenditure->goods_services=$request->goods_services;
            $expenditure->subsidies=$request->subsidies;
            $expenditure->interest=$request->interest;
            $expenditure->grants=$request->grants;
            $expenditure->other_expense=$request->other_expense;
            $expenditure->social_benefits=$request->social_benefits;
            $expenditure->capital_grants=$request->capital_grants;
            $expenditure->total=$request->total;
            $expenditure->year=$request->year;
             return response()->json($expenditure);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($government_expenditure_id)
    {
                
         $expenditure = finance_national_government_expenditure_model::findOrfail($government_expenditure_id);

  
          echo json_encode($expenditure);     
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
         'acquisition_nonfinancial_assets'=>'required|numeric',
      'acquisition_financial_assets'=>'required|numeric',
      'loans_repayments'=>'required|numeric',
      'compensation_employees'=>'required|numeric',
      'goods_services'=>'required|numeric',
      'subsidies'=>'required|numeric',
      'interest'=>'required|numeric',
      'grants'=>'required|numeric',
      'other_expense'=>'required|numeric',
      'social_benefits'=>'required|numeric',
      'capital_grants'=>'required|numeric',
      'total'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $expenditure =finance_national_government_expenditure_model::find($request->id);
            $expenditure->acquisition_nonfinancial_assets =$request->acquisition_nonfinancial_assets;
            $expenditure->acquisition_financial_assets =$request->acquisition_financial_assets;
            $expenditure->loans_repayments=$request->loans_repayments;
            $expenditure->compensation_employees=$request->compensation_employees;
            $expenditure->goods_services=$request->goods_services;
            $expenditure->subsidies=$request->subsidies;
            $expenditure->interest=$request->interest;
            $expenditure->grants=$request->grants;
            $expenditure->other_expense=$request->other_expense;
            $expenditure->social_benefits=$request->social_benefits;
            $expenditure->capital_grants=$request->capital_grants;
            $expenditure->total=$request->total;
            $expenditure->year=$request->year;
            $expenditure->save();
             return response()->json($expenditure);
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
