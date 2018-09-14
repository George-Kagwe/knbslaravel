<?php

namespace App\Http\Controllers\Forms\Finance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\ClassifficationOfRevenue_Model;
use View;
class ClassifficationOfRevenue extends Controller
{
    protected $rules =
    [
                          'taxes_income_profits_capitalgains'=>'required|numeric',
                          'taxes_property' =>'required|numeric',
                          'taxes_vat' =>'required|numeric',
                          'taxes_othergoodsandservices' =>'required|numeric',
                          'taxes_internationaltrade_transactions' =>'required|numeric',
                          'other_taxes_notelsewhereclassified' =>'required|numeric',
                          'totaltax_revenue' =>'required|numeric',
                          'socialsecuritycontributions'=>'required|numeric',
                          'property_income' =>'required|numeric',
                          'sale_goodsandservices' =>'required|numeric',
                          'fines_penaltiesandforfeitures' =>'required|numeric',
                          'repayments_domesticlending' =>'required|numeric',
                          'other_receiptsnotelsehereclassified' =>'required|numeric',
                          'total_nontax_revenue' =>'required|numeric',
                          'total' =>'required|numeric',
                          'year' =>'required|numeric'
    ];
    public function index()
    {
        //fetch all records

        $ClassifficationOfRevenue =ClassifficationOfRevenue_Model::all();
        
        return view('Forms.Finance.ClassifficationOfRevenue',['post' =>$ClassifficationOfRevenue]);

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
     
                          'taxes_income_profits_capitalgains'=>'required|numeric',
                          'taxes_property' =>'required|numeric',
                          'taxes_vat' =>'required|numeric',
                          'taxes_othergoodsandservices' =>'required|numeric',
                          'taxes_internationaltrade_transactions' =>'required|numeric',
                          'other_taxes_notelsewhereclassified' =>'required|numeric',
                          'totaltax_revenue' =>'required|numeric',
                          'socialsecuritycontributions'=>'required|numeric',
                          'property_income' =>'required|numeric',
                          'sale_goodsandservices' =>'required|numeric',
                          'fines_penaltiesandforfeitures' =>'required|numeric',
                          'repayments_domesticlending' =>'required|numeric',
                          'other_receiptsnotelsehereclassified' =>'required|numeric',
                          'total_nontax_revenue' =>'required|numeric',
                          'total' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $revenue = new ClassifficationOfRevenue_Model();
            $revenue->taxes_income_profits_capitalgains =$request->taxes_income_profits_capitalgains;
            $revenue->taxes_property=$request->taxes_property;
            $revenue->taxes_vat=$request->taxes_vat;
            $revenue->taxes_othergoodsandservices=$request->taxes_othergoodsandservices;
            $revenue->taxes_internationaltrade_transactions=$request->taxes_internationaltrade_transactions;
            $revenue->other_taxes_notelsewhereclassified=$request->other_taxes_notelsewhereclassified;
            $revenue->totaltax_revenue=$request->totaltax_revenue;
            $revenue->socialsecuritycontributions=$request->socialsecuritycontributions;
            $revenue->property_income=$request->property_income;
            $revenue->sale_goodsandservices=$request->sale_goodsandservices;
            $revenue->fines_penaltiesandforfeitures=$request->fines_penaltiesandforfeitures;
            $revenue->repayments_domesticlending=$request->repayments_domesticlending;
            $revenue->other_receiptsnotelsehereclassified=$request->other_receiptsnotelsehereclassified;
            $revenue->total_nontax_revenue=$request->total_nontax_revenue;
            $revenue->total=$request->total;
            $revenue->year=$request->year;
            $revenue->save();
             return response()->json($revenue);
           echo json_encode(array("status" => TRUE));

        }   

         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($economicrevenue_id)
    {
            
         
         $revenue = ClassifficationOfRevenue_Model::findOrfail($economicrevenue_id);

  
          echo json_encode($revenue);      }

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
     
                          'taxes_income_profits_capitalgains'=>'required|numeric',
                          'taxes_property' =>'required|numeric',
                          'taxes_vat' =>'required|numeric',
                          'taxes_othergoodsandservices' =>'required|numeric',
                          'taxes_internationaltrade_transactions' =>'required|numeric',
                          'other_taxes_notelsewhereclassified' =>'required|numeric',
                          'totaltax_revenue' =>'required|numeric',
                          'socialsecuritycontributions'=>'required|numeric',
                          'property_income' =>'required|numeric',
                          'sale_goodsandservices' =>'required|numeric',
                          'fines_penaltiesandforfeitures' =>'required|numeric',
                          'repayments_domesticlending' =>'required|numeric',
                          'other_receiptsnotelsehereclassified' =>'required|numeric',
                          'total_nontax_revenue' =>'required|numeric',
                          'total' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $revenue =AprrovedDegreeDiplomaPrograms_Model::find($request->id);
            $revenue->taxes_income_profits_capitalgains =$request->taxes_income_profits_capitalgains;
            $revenue->taxes_property=$request->taxes_property;
            $revenue->taxes_vat=$request->taxes_vat;
            $revenue->taxes_othergoodsandservices=$request->taxes_othergoodsandservices;
            $revenue->taxes_internationaltrade_transactions=$request->taxes_internationaltrade_transactions;
            $revenue->other_taxes_notelsewhereclassified=$request->other_taxes_notelsewhereclassified;
            $revenue->totaltax_revenue=$request->totaltax_revenue;
            $revenue->socialsecuritycontributions=$request->socialsecuritycontributions;
            $revenue->property_income=$request->property_income;
            $revenue->sale_goodsandservices=$request->sale_goodsandservices;
            $revenue->fines_penaltiesandforfeitures=$request->fines_penaltiesandforfeitures;
            $revenue->repayments_domesticlending=$request->repayments_domesticlending;
            $revenue->other_receiptsnotelsehereclassified=$request->other_receiptsnotelsehereclassified;
            $revenue->total_nontax_revenue=$request->total_nontax_revenue;
            $revenue->total=$request->total;
            $revenue->year=$request->year;
            $revenue->save();
             return response()->json($revenue);
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
