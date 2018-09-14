<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthNutritionalStatusOfWomen_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthNutritionalStatusOfWomen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'undernutrition' =>'required|numeric',
                             'normal' =>'required|numeric',
                                'overweight' =>'required|numeric',
                                'obese' =>'required|numeric'
                          
    ];
    public function index()
    {
        //
         $data = DB::table('health_nutritional_status_of_women')
               ->join('health_counties', 'health_nutritional_status_of_women.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('nutrition_adult_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.health.county.healthnutritionalstatusofwomen',
                 
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
                          'undernutrition' =>'required|numeric',
                             'normal' =>'required|numeric',
                                'overweight' =>'required|numeric',
                                'obese' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $adult = new HealthNutritionalStatusOfWomen_Model();
            $adult->county_id =$request->county_id;
            $adult->undernutrition=$request->undernutrition;
            $adult->normal=$request->normal;
            $adult->overweight=$request->overweight;
              $adult->obese=$request->obese;
            $adult->save();
             return response()->json($adult);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nutrition_adult_id)
    {
        //
         $adult = HealthNutritionalStatusOfWomen_Model::findOrfail($nutrition_adult_id);

  
          echo json_encode($adult);  
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
                          'undernutrition' =>'required|numeric',
                             'normal' =>'required|numeric',
                                'overweight' =>'required|numeric',
                                'obese' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $adult =HealthNutritionalStatusOfWomen_Model::find($request->id);
   $adult->county_id =$request->county_id;
            $adult->undernutrition=$request->undernutrition;
            $adult->normal=$request->normal;
            $adult->overweight=$request->overweight;
              $adult->obese=$request->obese;
            $adult->save();
             return response()->json($adult);
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
