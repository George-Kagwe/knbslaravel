<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Education\education_distribution_abovefifteen_ability_readwrite_model;
use View;
use Illuminate\Support\Facades\DB;

class education_distribution_abovefifteen_ability_readwrite extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
    'county_id'=>'required|numeric',
  
      'literate'=>'required|numeric',
      'illiterate'=>'required|numeric',
      'not_stated'=>'required|numeric',
      'no_of_individuals'=>'required|numeric',
      'gender'=>'required|alpha'
      
       ];
    public function index()
    {
        //
             $data = DB::table('education_distribution_abovefifteen_ability_readwrite')
               ->join('health_counties', 'education_distribution_abovefifteen_ability_readwrite.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('distribution_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.Education.county.educationdistributionabovefifteenabilityreadwrite',
                 
                   ['post' =>$data,'counties' =>$counties
                   ]);
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
        $validator = \Validator::make($request->all(), [
    'county_id'=>'required|numeric',
  
      'literate'=>'required|numeric',
      'illiterate'=>'required|numeric',
      'not_stated'=>'required|numeric',
      'no_of_individuals'=>'required|numeric',
      'gender'=>'required|alpha'
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $stated = new education_distribution_abovefifteen_ability_readwrite_model();
            $stated->county_id =$request->county_id;
            $stated->literate=$request->literate;
            $stated->illiterate=$request->illiterate;
            $stated->not_stated=$request->not_stated;
            $stated->no_of_individuals=$request->no_of_individuals;
            $stated->gender=$request->gender;
            
            
                  
            $stated->save();
             return response()->json($stated);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($distribution_id)
    {
        //
        $stated = education_distribution_abovefifteen_ability_readwrite_model::findOrfail($distribution_id);

  
          echo json_encode($stated);  
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
        //
         $validator = \Validator::make($request->all(), [
       'county_id'=>'required|numeric',
  
      'literate'=>'required|numeric',
      'illiterate'=>'required|numeric',
      'not_stated'=>'required|numeric',
      'no_of_individuals'=>'required|numeric',
      'gender'=>'required|alpha'
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $stated =education_distribution_abovefifteen_ability_readwrite_model::find($request->id);
    
             $stated->county_id =$request->county_id;
            $stated->literate=$request->literate;
            $stated->illiterate=$request->illiterate;
            $stated->not_stated=$request->not_stated;
            $stated->no_of_individuals=$request->no_of_individuals;
            $stated->gender=$request->gender;
            $stated->save();
             return response()->json($stated);
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
