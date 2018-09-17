<?php

namespace App\Http\Controllers\Forms\Poverty;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Poverty\poverty_food_and_non_food_expenditure_per_adult_equivalent_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//pverty distribution of household food food_expenses

class poverty_food_and_non_food_expenditure_per_adult_equivalent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'food'=>'required|numeric',
        'non_food'=>'required|numeric',
        'category'=>'required|max:255',
        

    ];
    public function index()
    {
        $food_expenses = DB::table('poverty_food_and_non_food_expenditure_per_adult_equivalent')
               ->join('health_counties', 'poverty_food_and_non_food_expenditure_per_adult_equivalent.county_id', '=', 'health_counties.county_id')->orderBy('poverty_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.Poverty.county.poverty_food_and_non_food_expenditure_per_adult_equivalent', ['food_expenses' =>$food_expenses,'counties' =>$counties]);
 
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
                          'county_name'=>'required',
                          'food'=>'required|numeric',
                          'non_food'=>'required|numeric',
                          'category'=>'required|max:255',
                          
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $food_expenses = new poverty_food_and_non_food_expenditure_per_adult_equivalent_model();
            $food_expenses->county_id =$request->county_name;
            $food_expenses->food=$request->food;
            $food_expenses->non_food=$request->non_food;         
            $food_expenses->category=$request->category;
            $food_expenses->save();
             return response()->json($food_expenses);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($poverty_id)
    {
        
          $food_expenses = poverty_food_and_non_food_expenditure_per_adult_equivalent_model::findOrfail($poverty_id);
     
      
         echo json_encode($food_expenses);
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
                          'county_name'=>'required',
                          'food'=>'required|numeric',
                          'non_food'=>'required|numeric',
                          'category'=>'required|max:255',
                          
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $food_expenses =poverty_food_and_non_food_expenditure_per_adult_equivalent_model::find($request->id);
            $food_expenses->county_id =$request->county_name;
            $food_expenses->food=$request->food;
            $food_expenses->non_food=$request->non_food;         
            $food_expenses->category=$request->category;
            $food_expenses->save();
             return response()->json($food_expenses);
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
