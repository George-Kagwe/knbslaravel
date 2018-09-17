<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Education\education_distribution_abovethreeyears_training_model;
use View;
use Illuminate\Support\Facades\DB;

class education_distribution_abovethreeyears_training extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
    'county_id'=>'required|numeric',
  
      'ever_attended'=>'required|numeric',
      'never_attended'=>'required|numeric',
      'not_stated'=>'required|numeric',
      'no_of_individuals'=>'required|numeric',
       ];
    public function index()
    {
        //
         $data = DB::table('education_distribution_abovethreeyears_training')
               ->join('health_counties', 'education_distribution_abovethreeyears_training.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('distribution_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.Education.county.educationdistributionabovethreeyearstraining',
                 
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
  
      'ever_attended'=>'required|numeric',
      'never_attended'=>'required|numeric',
      'not_stated'=>'required|numeric',
      'no_of_individuals'=>'required|numeric',
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $attended = new education_distribution_abovethreeyears_training_model();
            $attended->county_id =$request->county_id;
            $attended->ever_attended=$request->ever_attended;
             $attended->never_attended=$request->never_attended;
              $attended->not_stated=$request->not_stated;
               $attended->no_of_individuals=$request->no_of_individuals;
                 
                  
            $attended->save();
             return response()->json($attended);
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
        $x = education_distribution_abovethreeyears_training_model::findOrfail($distribution_id);

  
          echo json_encode($x);  
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
  
      'ever_attended'=>'required|numeric',
      'never_attended'=>'required|numeric',
      'not_stated'=>'required|numeric',
      'no_of_individuals'=>'required|numeric',
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $attended =education_distribution_abovethreeyears_training_model::find($request->id);
    $attended->county_id =$request->county_id;
            $attended->ever_attended=$request->ever_attended;
             $attended->never_attended=$request->never_attended;
              $attended->not_stated=$request->not_stated;
               $attended->no_of_individuals=$request->no_of_individuals;
            $attended->save();
             return response()->json($attended);
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
