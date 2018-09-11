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

     protected $rules = [ 'county_id'=>'required',
                          'subcounty_id'=>'required',
                          'cdf_amount'=>'required|numeric',
                          'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('finance_cdf_allocation_by_constituency')
               ->join('health_counties', 'finance_cdf_allocation_by_constituency.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'finance_cdf_allocation_by_constituency.subcounty_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('cdf_allocation_id', 'ASC')
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
                          'county_name'=>'required',
                          'subcounty_name'=>'required',
                          'cdf_amount'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $cdf = new CDFAllocation_Model();
            $cdf->county_id =$request->county_name;
            $cdf->subcounty_id=$request->subcounty_name;
            $cdf->cdf_amount=$request->cdf_amount;         
            $cdf->year=$request->year;
            $cdf->save();
             return response()->json($cdf);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
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
    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(), [
                           'county_name'=>'required',
                          'subcounty_name'=>'required',
                          'cdf_amount'=>'required|numeric',
                          'year'=>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $cdf =CDFAllocation_Model::find($request->id);
             $cdf->county_id =$request->county_name;
            $cdf->subcounty_id=$request->subcounty_name;
            $cdf->cdf_amount=$request->cdf_amount;         
            $cdf->year=$request->year;
            $cdf->save();          
             return response()->json($cdf);
           echo json_encode(array("status" => TRUE));

        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_subcounties($id)
    {
         $subcounties = DB::table('health_subcounty')
               ->where('county_id',  '=', $id)               
                ->get();

        return  json_encode($subcounties);
    }
}
