<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Education\education_distribution_abovethreeyears_highestlevel_reached_model;
use View;
use Illuminate\Support\Facades\DB;

class education_distribution_abovethreeyears_highestlevel_reached extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
    'county_id'=>'required|numeric',
  
      'pre_primary'=>'required|numeric',
      'primary'=>'required|numeric',
      'post_primary'=>'required|numeric',
      'secondary'=>'required|numeric',
      'college'=>'required|numeric',
      'university'=>'required|numeric',
      'madrassa_duksi'=>'required|numeric',
      'other'=>'required|numeric',
      'not_stated'=>'required|numeric',
      'no_of_individuals'=>'required|numeric'
      
       ];
    public function index()
    {
        //
         $data = DB::table('education_distribution_abovethreeyears_highestlevel_reached')
               ->join('health_counties', 'education_distribution_abovethreeyears_highestlevel_reached.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('distribution_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.Education.county.educationdistributionabovethreeyearshighestlevelreached',
                 
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
  
      'pre_primary'=>'required|numeric',
      'primary'=>'required|numeric',
      'post_primary'=>'required|numeric',
      'secondary'=>'required|numeric',
      'college'=>'required|numeric',
      'university'=>'required|numeric',
      'madrassa_duksi'=>'required|numeric',
      'other'=>'required|numeric',
      'not_stated'=>'required|numeric',
      'no_of_individuals'=>'required|numeric'
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $duksi = new education_distribution_abovethreeyears_highestlevel_reached_model();
            $duksi->county_id =$request->county_id;
            $duksi->pre_primary=$request->pre_primary;
            $duksi->primary=$request->primary;
            $duksi->post_primary=$request->post_primary;
            $duksi->secondary=$request->secondary;
            $duksi->college=$request->college;
            $duksi->university=$request->university;
            $duksi->madrassa_duksi=$request->madrassa_duksi;
            $duksi->other=$request->other;
            $duksi->not_stated=$request->not_stated;
            $duksi->no_of_individuals=$request->no_of_individuals;
            
                  
            $duksi->save();
             return response()->json($duksi);
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
         $duksi = education_distribution_abovethreeyears_highestlevel_reached_model::findOrfail($distribution_id);

  
          echo json_encode($duksi);  
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
  
      'pre_primary'=>'required|numeric',
      'primary'=>'required|numeric',
      'post_primary'=>'required|numeric',
      'secondary'=>'required|numeric',
      'college'=>'required|numeric',
      'university'=>'required|numeric',
      'madrassa_duksi'=>'required|numeric',
      'other'=>'required|numeric',
      'not_stated'=>'required|numeric',
      'no_of_individuals'=>'required|numeric'
                           
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $duksi =education_distribution_abovethreeyears_highestlevel_reached_model::find($request->id);
    $duksi->county_id =$request->county_id;
            $duksi->pre_primary=$request->pre_primary;
            $duksi->primary=$request->primary;
            $duksi->post_primary=$request->post_primary;
            $duksi->secondary=$request->secondary;
            $duksi->college=$request->college;
            $duksi->university=$request->university;
            $duksi->madrassa_duksi=$request->madrassa_duksi;
            $duksi->other=$request->other;
            $duksi->not_stated=$request->not_stated;
            $duksi->no_of_individuals=$request->no_of_individuals;
            $duksi->save();
             return response()->json($duksi);
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
