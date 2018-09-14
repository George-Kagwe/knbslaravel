<?php

namespace App\Http\Controllers\Forms\Population;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Population\vital_statistics_top_ten_death_causes_model;
use View;
use Illuminate\Support\Facades\DB;

class vital_statistics_top_ten_death_causes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'cause_id'=>'required',
                          'percent'=>'required|numeric',
                          'total'=>'required|numeric',
                          'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('vital_statistics_top_ten_death_causes')
               ->join('health_counties', 'vital_statistics_top_ten_death_causes.county_id', '=', 'health_counties.county_id')
                ->join('vital_statistics_death_causes', 'vital_statistics_top_ten_death_causes.cause_id', '=', 'vital_statistics_death_causes.cause_id')
                ->orderBy('count_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $causes = DB::table('vital_statistics_death_causes')->get();

      
        return view('forms.population.county.vital_statistics_top_ten_death_causes',
                 
                   ['post' =>$data,'counties' =>$counties,
                   'causes' =>$causes]);
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
                          'cause_id'=>'required',
                          'percent'=>'required|numeric',
                          'total'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $death = new vital_statistics_top_ten_death_causes_model();
            $death->county_id =$request->county_id;
            $death->cause_id=$request->cause_id;
            $death->percent=$request->percent;  
            $death->total=$request->total;         
            $death->year=$request->year;
            $death->save();
             return response()->json($death);
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
      
          $death = vital_statistics_top_ten_death_causes_model::findOrfail($id);
     
      
         echo json_encode($death);
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
                          'cause_id'=>'required',
                          'percent'=>'required|numeric',
                          'total'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
                $death =vital_statistics_top_ten_death_causes_model::find($request->id);
            $death->county_id =$request->county_id;
            $death->cause_id=$request->cause_id;
            $death->percent=$request->percent;
            $death->total=$request->total;           
            $death->year=$request->year;
            $death->save();
             return response()->json($death);
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
         $subcounties = DB::table('vital_statistics_death_causes')
               ->where('cause_id',  '=', $id)               
                ->get();

        return  json_encode($subcounties);
    }
}
