<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthNutritionalStatusOfChildren_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthNutritionalStatusOfChildren extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'stunted' =>'required|numeric',
                             'wasted' =>'required|numeric',
                                'under_weight' =>'required|numeric'
                          
    ];
    public function index()
    {
        //
        $data = DB::table('health_nutritional_status_of_children')
               ->join('health_counties', 'health_nutritional_status_of_children.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('nutrition_child_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.health.county.healthnutritionalstatusofchildren',
                 
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
                          'stunted' =>'required|numeric',
                             'wasted' =>'required|numeric',
                                'under_weight' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $child = new HealthNutritionalStatusOfChildren_Model();
            $child->county_id =$request->county_id;
            $child->stunted=$request->stunted;
            $child->wasted=$request->wasted;
            $child->under_weight=$request->under_weight;
            $child->save();
             return response()->json($child);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nutrition_child_id)
    {
        //
         $child = HealthNutritionalStatusOfChildren_Model::findOrfail($nutrition_child_id);

  
          echo json_encode($child);  
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
                          'stunted' =>'required|numeric',
                             'wasted' =>'required|numeric',
                                'under_weight' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $child =HealthNutritionalStatusOfChildren_Model::find($request->id);
   $child->county_id =$request->county_id;
            $child->stunted=$request->stunted;
            $child->wasted=$request->wasted;
            $child->under_weight=$request->under_weight;
            $child->save();
             return response()->json($child);
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
