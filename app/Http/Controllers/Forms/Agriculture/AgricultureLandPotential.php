<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\AgricultureLandPotential_Model;
use View;
use Illuminate\Support\Facades\DB;

class AgricultureLandPotential extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 'county_id'=>'required',
                          'subcounty_id'=>'required',
                          'potential_id'=>'required|numeric',
                          'value'=>'required'

                         ];
    public function index()
    {
        //
        $data = DB::table('agriculture_land_potential')
               ->join('health_counties', 'agriculture_land_potential.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'agriculture_land_potential.subcounty_id', '=', 'health_subcounty.subcounty_id')
                 ->join('agriculture_land_potential_ids', 'agriculture_land_potential.potential_id', '=', 'agriculture_land_potential_ids.potential_id')
                ->orderBy('land_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')
                          
                          ->get();
                           $land = DB::table('agriculture_land_potential_ids')
                          
                          ->get();

      
        return view('Forms.Agriculture.county.agriculturelandpotential', ['post' =>$data,'counties' =>$counties,         'subcounty' =>$subcounty,   'land' =>$land]);
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
                          'county_name'=>'required',
                          'subcounty_name'=>'required',
                          'landPotential'=>'required|numeric',
                          'value'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $landN = new AgricultureLandPotential_Model();
            $landN->county_id =$request->county_name;
            $landN->subcounty_id=$request->subcounty_name;
            $landN->potential_id=$request->landPotential;         
            $landN->value=$request->value;
            $landN->save();
             return response()->json($landN);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($land_id)
    {
        //
        $landN = AgricultureLandPotential_Model::findOrfail($land_id);
     
      
         echo json_encode($landN);
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
                             'county_name'=>'required',
                          'subcounty_name'=>'required',
                          'landPotential'=>'required|numeric',
                          'value'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $landN =AgricultureLandPotential_Model::find($request->id);
              $landN->county_id =$request->county_name;
            $landN->subcounty_id=$request->subcounty_name;
            $landN->potential_id=$request->landPotential;         
            $landN->value=$request->value;
            $landN->save();          
             return response()->json($landN);
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

        $land = DB::table('agriculture_land_potential_ids')
               ->where('potential_id',  '=', $id)               
                ->get();

        return  json_encode($land);
    }
}
