<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthRegisteredMedicalLaboratoriesByCounties_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthRegisteredMedicalLaboratoriesByCounties extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'class_a' =>'required|numeric',
                             'class_b' =>'required|numeric',
                                'class_c' =>'required|numeric',
                                'class_d' =>'required|numeric',
                                 'class_e' =>'required|numeric',
                                  'class_f' =>'required|numeric',
                                   'unknown' =>'required|numeric'
                          
    ];
    public function index()
    {
        //
         $data = DB::table('health_registered_medical_laboratories_by_counties')
               ->join('health_counties', 'health_registered_medical_laboratories_by_counties.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('reg_med_lab_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.health.county.healthregisteredmedicallaboratoriesbycounties',
                 
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
                          'class_a' =>'required|numeric',
                             'class_b' =>'required|numeric',
                                'class_c' =>'required|numeric',
                                'class_d' =>'required|numeric',
                                 'class_e' =>'required|numeric',
                                  'class_f' =>'required|numeric',
                                   'unknown' =>'required|numeric'
                          
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $med = new HealthRegisteredMedicalLaboratoriesByCounties_Model();
            $med->county_id =$request->county_id;
            $med->class_a=$request->class_a;
            $med->class_b=$request->class_b;
            $med->class_c=$request->class_c;
              $med->class_d=$request->class_d;
                 $med->class_e=$request->class_e;
                    $med->class_f=$request->class_f;
                       $med->unknown=$request->unknown;
            $med->save();
             return response()->json($med);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($reg_med_lab_id)
    {
        //
         $med = HealthRegisteredMedicalLaboratoriesByCounties_Model::findOrfail($reg_med_lab_id);

  
          echo json_encode($med);  
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
                          'class_a' =>'required|numeric',
                             'class_b' =>'required|numeric',
                                'class_c' =>'required|numeric',
                                'class_d' =>'required|numeric',
                                 'class_e' =>'required|numeric',
                                  'class_f' =>'required|numeric',
                                   'unknown' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $med =HealthRegisteredMedicalLaboratoriesByCounties_Model::find($request->id);
  $med->county_id =$request->county_id;
            $med->class_a=$request->class_a;
            $med->class_b=$request->class_b;
            $med->class_c=$request->class_c;
              $med->class_d=$request->class_d;
                 $med->class_e=$request->class_e;
                    $med->class_f=$request->class_f;
                       $med->unknown=$request->unknown;
            $med->save();
             return response()->json($med);
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
