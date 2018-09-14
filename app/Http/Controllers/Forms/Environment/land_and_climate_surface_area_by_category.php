<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Environment\land_and_climate_surface_area_by_category_model;
use View;
use Illuminate\Support\Facades\DB;

class land_and_climate_surface_area_by_category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'category_id'=>'required',
                          'area_sq_km'=>'required|numeric',
                      

                         ];
    public function index()
    {
        $data = DB::table('land_and_climate_surface_area_by_category')
               ->join('health_counties', 'land_and_climate_surface_area_by_category.county_id', '=', 'health_counties.county_id')
                ->join('land_and_climate_surface_area_by_category_ids', 'land_and_climate_surface_area_by_category.category_id', '=', 'land_and_climate_surface_area_by_category_ids.category_id')
                ->orderBy('surface_area_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $category = DB::table('land_and_climate_surface_area_by_category_ids')
                          
                          ->get();

      
        return view('forms.environment.county.land_and_climate_surface_area_by_category',
                 
                   ['post' =>$data,'counties' =>$counties,
                   'category' =>$category]);
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
                          'category_id'=>'required',
                          'area_sq_km'=>'required|numeric',
                      
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $category = new land_and_climate_surface_area_by_category_model();
            $category->county_id =$request->county_id;
            $category->category_id=$request->category_id;
            $category->area_sq_km=$request->area_sq_km;         
      
            $category->save();
             return response()->json($category);
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
      
          $category = land_and_climate_surface_area_by_category_model::findOrfail($id);
     
      
         echo json_encode($category);
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
                          'category_id'=>'required',
                          'area_sq_km'=>'required|numeric',
                      
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
           $category =land_and_climate_surface_area_by_category_model::find($request->id);
            $category->county_id =$request->county_id;
            $category->category_id=$request->category_id;
            $category->area_sq_km=$request->area_sq_km;         
      
            $category->save();
             return response()->json($category);
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
         $subcounties = DB::table('land_and_climate_surface_area_by_category_ids')
               ->where('category_id',  '=', $id)               
                ->get();

        return  json_encode($subcounties);
    }
}
