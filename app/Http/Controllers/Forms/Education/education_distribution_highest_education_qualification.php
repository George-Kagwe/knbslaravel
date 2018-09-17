<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Education\education_distribution_highest_education_qualification_model;
use View;
use Illuminate\Support\Facades\DB;

class education_distribution_highest_education_qualification extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [

      'county_id'=>'required|numeric',
  
      'none'=>'required|numeric',
      'cpe_kcpe'=>'required|numeric',
      'kape'=>'required|numeric',
      'kjse'=>'required|numeric',
        'kce_kcse'=>'required|numeric',
          'kace_eaace'=>'required|numeric',
            'certificate'=>'required|numeric',
              'diploma'=>'required|numeric',
                'degree'=>'required|numeric',
                  'post_literacy_cert'=>'required|numeric',
                    'other'=>'required|numeric',
                      'not_stated'=>'required|numeric',
                        'no_of_individuals'=>'required|numeric'
                          
                              
                        
    ];
    public function index()
    {
        //
        $data = DB::table('education_distribution_highest_education_qualification')
               ->join('health_counties', 'education_distribution_highest_education_qualification.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('distribution_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.Education.county.educationdistributionhighesteducationqualification',
                 
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
  
      'none'=>'required|numeric',
      'cpe_kcpe'=>'required|numeric',
      'kape'=>'required|numeric',
      'kjse'=>'required|numeric',
        'kce_kcse'=>'required|numeric',
          'kace_eaace'=>'required|numeric',
            'certificate'=>'required|numeric',
              'diploma'=>'required|numeric',
                'degree'=>'required|numeric',
                  'post_literacy_cert'=>'required|numeric',
                    'other'=>'required|numeric',
                      'not_stated'=>'required|numeric',
                        'no_of_individuals'=>'required|numeric'
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $distributionN = new education_distribution_highest_education_qualification_model();
            $distributionN->county_id =$request->county_id;
            $distributionN->none=$request->none;
             $distributionN->cpe_kcpe=$request->cpe_kcpe;
              $distributionN->kape=$request->kape;
               $distributionN->kjse=$request->kjse;
                 $distributionN->kce_kcse=$request->kce_kcse;
                   $distributionN->kace_eaace=$request->kace_eaace;
                     $distributionN->certificate=$request->certificate;
                       $distributionN->diploma=$request->diploma;
                         $distributionN->degree=$request->degree;
                           $distributionN->post_literacy_cert=$request->post_literacy_cert;
                             $distributionN->other=$request->other;
                               $distributionN->not_stated=$request->not_stated;
                                $distributionN->no_of_individuals=$request->no_of_individuals;
            $distributionN->save();
             return response()->json($distributionN);
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
         $distributionN = education_distribution_highest_education_qualification_model::findOrfail($distribution_id);

  
          echo json_encode($distributionN);  
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
  
      'none'=>'required|numeric',
      'cpe_kcpe'=>'required|numeric',
      'kape'=>'required|numeric',
      'kjse'=>'required|numeric',
        'kce_kcse'=>'required|numeric',
          'kace_eaace'=>'required|numeric',
            'certificate'=>'required|numeric',
              'diploma'=>'required|numeric',
                'degree'=>'required|numeric',
                  'post_literacy_cert'=>'required|numeric',
                    'other'=>'required|numeric',
                      'not_stated'=>'required|numeric',
                        'no_of_individuals'=>'required|numeric'
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $distributionN =education_distribution_highest_education_qualification_model::find($request->id);
     $distributionN->county_id =$request->county_id;
            $distributionN->none=$request->none;
             $distributionN->cpe_kcpe=$request->cpe_kcpe;
              $distributionN->kape=$request->kape;
               $distributionN->kjse=$request->kjse;
                 $distributionN->kce_kcse=$request->kce_kcse;
                   $distributionN->kace_eaace=$request->kace_eaace;
                     $distributionN->certificate=$request->certificate;
                       $distributionN->diploma=$request->diploma;
                         $distributionN->degree=$request->degree;
                           $distributionN->post_literacy_cert=$request->post_literacy_cert;
                             $distributionN->other=$request->other;
                               $distributionN->not_stated=$request->not_stated;
                                $distributionN->no_of_individuals=$request->no_of_individuals;
            $distributionN->save();
             return response()->json($distributionN);
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
