<?php

namespace App\Http\Controllers\Forms\Energy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Energy\energy_averagemonthlypumppricesforfuelbycategory_model;
use View;
use Illuminate\Support\Facades\DB;

class energy_averagemonthlypumppricesforfuelbycategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'month_id'=>'required',
                          'super_petrol'=>'required|numeric',
                           'diesel'=>'required|numeric',
                           'kerosene'=>'required|numeric',
                          'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('energy_averagemonthlypumppricesforfuelbycategory')
               ->join('health_counties', 'energy_averagemonthlypumppricesforfuelbycategory.county_id', '=', 'health_counties.county_id')
                ->join('health_months', 'energy_averagemonthlypumppricesforfuelbycategory.month_id', '=', 'health_months.month_id')
                ->orderBy('count_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $months = DB::table('health_months')->get();

      
        return view('forms.energy.county.energy_averagemonthlypumppricesforfuelbycategory',
                 
                   ['post' =>$data,'counties' =>$counties,
                   'months' =>$months]);
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
                          'county_id'=>'required',
                          'month_id'=>'required',
                          'super_petrol'=>'required|numeric',
                          'diesel'=>'required|numeric',
                          'kerosene'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $pump = new energy_averagemonthlypumppricesforfuelbycategory_model();
            $pump->county_id =$request->county_id;
            $pump->month_id=$request->month_id;
            $pump->super_petrol=$request->super_petrol; 
            $pump->diesel=$request->diesel;      
            $pump->kerosene=$request->kerosene;       
            $pump->year=$request->year;
            $pump->save();
             return response()->json($pump);
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
      
          $pump = energy_averagemonthlypumppricesforfuelbycategory_model::findOrfail($id);
     
      
         echo json_encode($pump);
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
                          'county_id'=>'required',
                          'month_id'=>'required',
                          'super_petrol'=>'required|numeric',
                          'diesel'=>'required|numeric',
                         'kerosene'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $pump =energy_averagemonthlypumppricesforfuelbycategory_model::find($request->id);
            $pump->county_id =$request->county_id;
            $pump->month_id=$request->month_id;
            $pump->super_petrol=$request->super_petrol;    
            $pump->diesel=$request->diesel;  
            $pump->kerosene=$request->kerosene;     
            $pump->year=$request->year;
            $pump->save();
             return response()->json($pump);
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
         $subcounties = DB::table('health_months')
               ->where('month_id',  '=', $id)               
                ->get();

        return  json_encode($subcounties);
    }
}
