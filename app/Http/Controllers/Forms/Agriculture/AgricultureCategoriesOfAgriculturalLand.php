<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\AgricultureCategoriesOfAgriculturalLand_Model;
use View;
use Illuminate\Support\Facades\DB;

class AgricultureCategoriesOfAgriculturalLand extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 'county_id'=>'required|numeric',
                          'high_potential'=>'required|numeric',
                          'medium_potential'=>'required|numeric',
                          'low_potential'=>'required|numeric',
                           'total_land'=>'required|numeric',
                            'all_other_land'=>'required|numeric',
                             'total_land_area'=>'required|numeric'
                              

                         ];
    public function index()
    {
        //
         $data = DB::table('agriculture_categories_of_agricultural_land')
               ->join('health_counties', 'agriculture_categories_of_agricultural_land.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('land_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.Agriculture.county.agriculturecategoriesofagriculturalland',
                 
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
                          'high_potential'=>'required|numeric',
                          'medium_potential'=>'required|numeric',
                          'low_potential'=>'required|numeric',
                           'total_land'=>'required|numeric',
                            'all_other_land'=>'required|numeric',
                             'total_land_area'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $potential = new AgricultureCategoriesOfAgriculturalLand_Model();
            $potential->county_id =$request->county_id;
            $potential->high_potential=$request->high_potential;
            $potential->medium_potential=$request->medium_potential;         
            $potential->low_potential=$request->low_potential;
              $potential->total_land=$request->total_land;
                $potential->all_other_land=$request->all_other_land;
                  $potential->total_land_area=$request->total_land_area;
                    
            $potential->save();
             return response()->json($potential);
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
         $potential = AgricultureCategoriesOfAgriculturalLand_Model::findOrfail($land_id);
     
      
         echo json_encode($potential);
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
                          'high_potential'=>'required|numeric',
                          'medium_potential'=>'required|numeric',
                          'low_potential'=>'required|numeric',
                           'total_land'=>'required|numeric',
                            'all_other_land'=>'required|numeric',
                             'total_land_area'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $potential =AgricultureCategoriesOfAgriculturalLand_Model::find($request->id);
             $potential->county_id =$request->county_id;
            $potential->high_potential=$request->high_potential;
            $potential->medium_potential=$request->medium_potential;         
            $potential->low_potential=$request->low_potential;
              $potential->total_land=$request->total_land;
                $potential->all_other_land=$request->all_other_land;
                  $potential->total_land_area=$request->total_land_area;
            $potential->save();          
             return response()->json($potential);
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
