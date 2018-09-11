<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\agriculture_gross_market_production_model;
use View;



class agriculture_gross_market_production extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
       'cattle_and_calves_for_slaughter'=>'required|numeric',
      'sugarcane'=>'required|numeric',
      'vegetables'=>'required|numeric',
      'cutflowers'=>'required|numeric',
        'tea'=>'required|numeric',
       'fruits'=>'required|numeric',
      'poultry_and_eggs'=>'required|numeric',
      'wheat'=>'required|numeric',
      'sheep_goats_and_lambs_for_slaughter'=>'required|numeric',
       'maize'=>'required|numeric',
      'coffee'=>'required|numeric',
      'barley'=>'required|numeric',
      'other_temporary_crops'=>'required|numeric',
      'wool'=>'required|numeric',
                              
      'potatoes'=>'required|numeric',
       'pulses'=>'required|numeric',
      'pyrethrum'=>'required|numeric',
      'rice_paddy'=>'required|numeric',
      'tobacco'=>'required|numeric',
      'total_crops'=>'required|numeric',
      'grand_total'=>'required|numeric',
      'small_implements'=>'required|numeric',
      'spares_and_maintenance_of_machinery'=>'required|numeric',
      'tractor_services'=>'required|numeric',
      'transportation'=>'required|numeric',
      'year'=>'required|numeric',                                         
                        
    ];
    public function index()
    {
        
        $agriculture_gross_market_production =agriculture_gross_market_production_model::all();
        
        return view('forms.agriculture.national.agriculture_gross_market_production',['post' =>$agriculture_gross_market_production]);
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
        
        $validator = \Validator::make($request->all(), [
     'cattle_and_calves_for_slaughter'=>'required|numeric',
      'sugarcane'=>'required|numeric',
      'vegetables'=>'required|numeric',
      'cutflowers'=>'required|numeric',
          'tea'=>'required|numeric',

       'fruits'=>'required|numeric',
      'poultry_and_eggs'=>'required|numeric',
      'wheat'=>'required|numeric',
      'sheep_goats_and_lambs_for_slaughter'=>'required|numeric',
       'maize'=>'required|numeric',
      'coffee'=>'required|numeric',
      'barley'=>'required|numeric',
       'dairy_products'=>'required|numeric',
        'cotton'=>'required|numeric',
       'hides_and_skins'=>'required|numeric',
        'other_cereals'=>'required|numeric',
       'pigs_for_slaughter'=>'required|numeric',
      'other_temporary_crops'=>'required|numeric',
      'wool'=>'required|numeric',
                              
      'potatoes'=>'required|numeric',
       'pulses'=>'required|numeric',
      'pyrethrum'=>'required|numeric',
      'rice_paddy'=>'required|numeric',
      'tobacco'=>'required|numeric',
      'total_crops'=>'required|numeric',
      'grand_total'=>'required|numeric',
  
      'year'=>'required|numeric'                                   
                        
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $gross = new agriculture_gross_market_production_model();
              $gross->cattle_and_calves_for_slaughter =$request->cattle_and_calves_for_slaughter;
            $gross->sugarcane=$request->sugarcane;
            $gross->vegetables=$request->vegetables;
            $gross->cutflowers =$request->cutflowers;
            $gross->tea=$request->tea;
            $gross->fruits=$request->fruits;
            $gross->poultry_and_eggs=$request->poultry_and_eggs;
            $gross->wheat =$request->wheat;
            $gross->sheep_goats_and_lambs_for_slaughter=$request->sheep_goats_and_lambs_for_slaughter;
            $gross->maize=$request->maize;
            $gross->coffee=$request->coffee;
            $gross->barley=$request->barley;
             $gross->dairy_products=$request->dairy_products;
                  
            $gross->cotton=$request->cotton;
            $gross->hides_and_skins=$request->hides_and_skins;
            $gross->other_cereals=$request->other_cereals;
            $gross->other_temporary_crops=$request->other_temporary_crops;
                        $gross->pigs_for_slaughter=$request->pigs_for_slaughter;

            $gross->wool=$request->wool;
            $gross->potatoes=$request->potatoes;
            $gross->pulses=$request->pulses;
            $gross->pyrethrum=$request->pyrethrum;
            $gross->other_temporary_crops=$request->other_temporary_crops;
            $gross->rice_paddy=$request->rice_paddy;
            $gross->tobacco=$request->tobacco;
            $gross->total_crops=$request->total_crops;
            $gross->grand_total=$request->grand_total;
               $gross->year=$request->year;
            $gross->save();
             return response()->json($gross);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($value_of_agricultural_gross_id)
    {
       
         
         $gross = agriculture_gross_market_production_model::findOrfail($value_of_agricultural_gross_id);

  
          echo json_encode($gross);     
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
      'cattle_and_calves_for_slaughter'=>'required|numeric',
      'sugarcane'=>'required|numeric',
      'vegetables'=>'required|numeric',
      'cutflowers'=>'required|numeric',
          'tea'=>'required|numeric',

       'fruits'=>'required|numeric',
      'poultry_and_eggs'=>'required|numeric',
      'wheat'=>'required|numeric',
      'sheep_goats_and_lambs_for_slaughter'=>'required|numeric',
       'maize'=>'required|numeric',
      'coffee'=>'required|numeric',
      'barley'=>'required|numeric',
       'dairy_products'=>'required|numeric',
        'cotton'=>'required|numeric',
       'hides_and_skins'=>'required|numeric',
        'other_cereals'=>'required|numeric',
       'pigs_for_slaughter'=>'required|numeric',
      'other_temporary_crops'=>'required|numeric',
      'wool'=>'required|numeric',
                              
      'potatoes'=>'required|numeric',
       'pulses'=>'required|numeric',
      'pyrethrum'=>'required|numeric',
      'rice_paddy'=>'required|numeric',
      'tobacco'=>'required|numeric',
      'total_crops'=>'required|numeric',
      'grand_total'=>'required|numeric',
  
      'year'=>'required|numeric'
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $gross =agriculture_gross_market_production_model::find($request->id);
           $gross->cattle_and_calves_for_slaughter =$request->cattle_and_calves_for_slaughter;
            $gross->sugarcane=$request->sugarcane;
            $gross->vegetables=$request->vegetables;
            $gross->cutflowers =$request->cutflowers;
            $gross->tea=$request->tea;
            $gross->fruits=$request->fruits;
            $gross->poultry_and_eggs=$request->poultry_and_eggs;
            $gross->wheat =$request->wheat;
            $gross->sheep_goats_and_lambs_for_slaughter=$request->sheep_goats_and_lambs_for_slaughter;
            $gross->maize=$request->maize;
            $gross->coffee=$request->coffee;
            $gross->barley=$request->barley;
             $gross->dairy_products=$request->dairy_products;
            $gross->pigs_for_slaughter=$request->pigs_for_slaughter;
            $gross->cotton=$request->cotton;
            $gross->hides_and_skins=$request->hides_and_skins;
            $gross->other_cereals=$request->other_cereals;
            $gross->other_temporary_crops=$request->other_temporary_crops;
            $gross->wool=$request->wool;
            $gross->potatoes=$request->potatoes;
            $gross->pulses=$request->pulses;
            $gross->pyrethrum=$request->pyrethrum;
            $gross->other_temporary_crops=$request->other_temporary_crops;
            $gross->rice_paddy=$request->rice_paddy;
            $gross->tobacco=$request->tobacco;
            $gross->total_crops=$request->total_crops;
            $gross->grand_total=$request->grand_total;
           $gross->year=$request->year;
            $gross->save();
             return response()->json($gross);
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
