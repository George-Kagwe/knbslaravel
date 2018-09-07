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
        
        return view('forms.finance.ClassifficationOfRevenue',['finance' =>$ClassifficationOfRevenue]);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
