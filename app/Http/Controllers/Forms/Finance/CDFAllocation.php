<?php

namespace App\Http\Controllers\Forms\Finance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\CDFAllocation_Model;
use View;
use Illuminate\Support\Facades\DB;

class CDFAllocation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('finance_cdf_allocation_by_constituency')
               ->join('health_counties', 'finance_cdf_allocation_by_constituency.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'finance_cdf_allocation_by_constituency.county_id', '=', 'health_subcounty.county_id')
                ->get();

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')
                          
                          ->get();

      
        return view('forms.finance.CDFAllocation',
                 
                   ['post' =>$data,'counties' =>$counties,
                   'subcounty' =>$subcounty]);
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
         // $data = DB::table('finance_cdf_allocation_by_constituency')
         //              ->where('finance_cdf_allocation_by_constituency.cdf_allocation_id','=',$id)
         //        ->get();


          $cdf = CDFAllocation_Model::findOrfail($id);

  
     
      
         echo json_encode($cdf);
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
