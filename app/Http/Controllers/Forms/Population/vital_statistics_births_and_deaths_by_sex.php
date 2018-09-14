<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Population\vital_statistics_births_and_deaths_by_sex_model;
use View;
use Illuminate\Support\Facades\DB;

class vital_statistics_births_and_deaths_by_sex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                         'births'=>'required|numeric',
                         'deaths'=>'required|numeric',
                         'gender'=>'required|alpha',
                 
                          'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('vital_statistics_births_and_deaths_by_sex')
               ->join('health_counties', 'vital_statistics_births_and_deaths_by_sex.county_id', '=', 'health_counties.county_id')
                            ->orderBy('count_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

              

      
        return view('forms.population.county.vital_statistics_births_and_deaths_by_sex',
                 
                   ['post' =>$data,'counties' =>$counties]);
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
                          'births'=>'required|numeric',
                          'deaths'=>'required|numeric',
                          'gender'=>'required|alpha',
                          'year'=>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $vital = new vital_statistics_births_and_deaths_by_sex_model();
            $vital->county_id =$request->county_id;
            $vital->births=$request->births;
            $vital->deaths=$request->deaths;   
            $vital->gender=$request->gender;         
            $vital->year=$request->year;
            $vital->save();
             return response()->json($vital);
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
      
          $vital = vital_statistics_births_and_deaths_by_sex_model::findOrfail($id);
     
      
         echo json_encode($vital);
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
                          'births'=>'required|numeric',
                          'deaths'=>'required|numeric',
                          'gender'=>'required|alpha',
                          'year'=>'required'
        ]);
        
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $vital =vital_statistics_births_and_deaths_by_sex_model::find($request->id);
            $vital->county_id =$request->county_id;
            $vital->births=$request->births;
            $vital->deaths=$request->deaths;   
            $vital->gender=$request->gender;         
            $vital->year=$request->year;
            $vital->save();
             return response()->json($vital);
           echo json_encode(array("status" => TRUE));

        }  



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
