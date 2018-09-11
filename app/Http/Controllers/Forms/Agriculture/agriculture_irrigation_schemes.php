<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\agriculture_irrigation_schemes_model;
use View;



class agriculture_irrigation_schemes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
       'ahero_gross_value_of_crop_millions'=>'required|numeric',
      'ahero_hectares_cropped'=>'required|numeric',
      'ahero_number_of_plots_holders'=>'required|numeric',
      'ahero_paddy_yields_tonnes'=>'required|numeric',
        'ahero_payments_to_plot_holders_millions'=>'required|numeric',
       'all_schemes_gross_value_of_crop_millions'=>'required|numeric',
      'all_schemes_hectares_cropped'=>'required|numeric',
      'all_schemes_number_of_plots_holders'=>'required|numeric',
   
       'all_schemes_paddy_yields_tonnes'=>'required|numeric',
      'all_schemes_payments_to_plot_holders_millions'=>'required|numeric',
      'bunyala_gross_value_of_crop_millions'=>'required|numeric',
      'bunyala_hectares_cropped'=>'required|numeric',
     'bunyala_number_of_plots_holders'=>'required|numeric',
    'bunyala_paddy_yields_tonnes'=>'required|numeric',
       'bunyala_payments_to_plot_holders_millions'=>'required|numeric',
          'mwea_gross_value_of_crop_millions'=>'required|numeric',
             'mwea_hectares_cropped'=>'required|numeric',
 
                              
      'mwea_number_of_plots_holders'=>'required|numeric',
       'mwea_paddy_yields_tonnes'=>'required|numeric',
      'mwea_payments_to_plot_holders_million'=>'required|numeric',
      'perkerra_gross_value_of_crop_millions'=>'required|numeric',
      'perkerra_hectares_cropped'=>'required|numeric',
      'perkerra_number_of_plots_holders'=>'required|numeric',
      'perkerra_payments_to_plot_holders_millions'=>'required|numeric',
      'perkerra_seed_maize_tonnes'=>'required|numeric',
      'west_kano_gross_value_of_crop_millions'=>'required|numeric',
      'west_kano_hectares_cropped'=>'required|numeric',
      'west_kano_number_of_plots_holders'=>'required|numeric',
      'west_kano_paddy_yields_tonnes'=>'required|numeric',
     'west_kano_payments_to_plot_holders_millions'=>'required|numeric',
      'year'=>'required|numeric'                                        
                        
    ];
    public function index()
    {
        
        $agriculture_irrigation_schemes =agriculture_irrigation_schemes_model::all();
        
        return view('forms.agriculture.national.agriculture_irrigation_schemes',['post' =>$agriculture_irrigation_schemes]);
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
   'ahero_gross_value_of_crop_millions'=>'required|numeric',
      'ahero_hectares_cropped'=>'required|numeric',
      'ahero_number_of_plots_holders'=>'required|numeric',
      'ahero_paddy_yields_tonnes'=>'required|numeric',
        'ahero_payments_to_plot_holders_millions'=>'required|numeric',
       'all_schemes_gross_value_of_crop_millions'=>'required|numeric',
      'all_schemes_hectares_cropped'=>'required|numeric',
      'all_schemes_number_of_plots_holders'=>'required|numeric',
   
       'all_schemes_paddy_yields_tonnes'=>'required|numeric',
      'all_schemes_payments_to_plot_holders_millions'=>'required|numeric',
      'bunyala_gross_value_of_crop_millions'=>'required|numeric',
      'bunyala_hectares_cropped'=>'required|numeric',
     'bunyala_number_of_plots_holders'=>'required|numeric',
    'bunyala_paddy_yields_tonnes'=>'required|numeric',
       'bunyala_payments_to_plot_holders_millions'=>'required|numeric',
          'mwea_gross_value_of_crop_millions'=>'required|numeric',
             'mwea_hectares_cropped'=>'required|numeric',
 
                              
      'mwea_number_of_plots_holders'=>'required|numeric',
       'mwea_paddy_yields_tonnes'=>'required|numeric',
      'mwea_payments_to_plot_holders_million'=>'required|numeric',
      'perkerra_gross_value_of_crop_millions'=>'required|numeric',
      'perkerra_hectares_cropped'=>'required|numeric',
      'perkerra_number_of_plots_holders'=>'required|numeric',
      'perkerra_payments_to_plot_holders_millions'=>'required|numeric',
      'perkerra_seed_maize_tonnes'=>'required|numeric',
      'west_kano_gross_value_of_crop_millions'=>'required|numeric',
      'west_kano_hectares_cropped'=>'required|numeric',
      'west_kano_number_of_plots_holders'=>'required|numeric',
    'west_kano_paddy_yields_tonnes'=>'required|numeric',
 'west_kano_payments_to_plot_holders_millions'=>'required|numeric',
      'year'=>'required|numeric' 
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $irrigation = new agriculture_irrigation_schemes_model();
              $irrigation->ahero_gross_value_of_crop_millions =$request->ahero_gross_value_of_crop_millions;
            $irrigation->ahero_hectares_cropped=$request->ahero_hectares_cropped;
            $irrigation->ahero_number_of_plots_holders=$request->ahero_number_of_plots_holders;
            $irrigation->ahero_paddy_yields_tonnes =$request->ahero_paddy_yields_tonnes;
            $irrigation->ahero_payments_to_plot_holders_millions=$request->ahero_payments_to_plot_holders_millions;
            $irrigation->all_schemes_gross_value_of_crop_millions=$request->all_schemes_gross_value_of_crop_millions;
            $irrigation->all_schemes_hectares_cropped=$request->all_schemes_hectares_cropped;
            $irrigation->all_schemes_number_of_plots_holders =$request->all_schemes_number_of_plots_holders;
       
            $irrigation->all_schemes_paddy_yields_tonnes=$request->all_schemes_paddy_yields_tonnes;
            $irrigation->all_schemes_payments_to_plot_holders_millions=$request->all_schemes_payments_to_plot_holders_millions;
            $irrigation->bunyala_gross_value_of_crop_millions=$request->bunyala_gross_value_of_crop_millions;
    
                  
            $irrigation->bunyala_number_of_plots_holders=$request->bunyala_number_of_plots_holders;
            $irrigation->bunyala_paddy_yields_tonnes=$request->bunyala_paddy_yields_tonnes;
            $irrigation->bunyala_payments_to_plot_holders_millions=$request->bunyala_payments_to_plot_holders_millions;
            $irrigation->bunyala_hectares_cropped=$request->bunyala_hectares_cropped;
           $irrigation->mwea_gross_value_of_crop_millions=$request->mwea_gross_value_of_crop_millions;

            $irrigation->mwea_hectares_cropped=$request->mwea_hectares_cropped;
            $irrigation->mwea_number_of_plots_holders=$request->mwea_number_of_plots_holders;
            $irrigation->mwea_paddy_yields_tonnes=$request->mwea_paddy_yields_tonnes;
            $irrigation->mwea_payments_to_plot_holders_million=$request->mwea_payments_to_plot_holders_million;
                  $irrigation->perkerra_gross_value_of_crop_millions=$request->perkerra_gross_value_of_crop_millions;
            $irrigation->perkerra_hectares_cropped=$request->perkerra_hectares_cropped;
            $irrigation->perkerra_number_of_plots_holders=$request->perkerra_number_of_plots_holders;
            $irrigation->perkerra_payments_to_plot_holders_millions=$request->perkerra_payments_to_plot_holders_millions;
          
            $irrigation->perkerra_seed_maize_tonnes=$request->perkerra_seed_maize_tonnes;
           $irrigation->west_kano_gross_value_of_crop_millions=$request->west_kano_gross_value_of_crop_millions;

          $irrigation->west_kano_hectares_cropped=$request->west_kano_hectares_cropped;

           $irrigation->west_kano_number_of_plots_holders=$request->west_kano_number_of_plots_holders;
 

           $irrigation->west_kano_paddy_yields_tonnes=$request->west_kano_paddy_yields_tonnes;


            $irrigation->west_kano_payments_to_plot_holders_millions=$request->west_kano_payments_to_plot_holders_millions;

               $irrigation->year=$request->year;
            $irrigation->save();
             return response()->json($irrigation);
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
       
         
         $irrigation = agriculture_irrigation_schemes_model::findOrfail($value_of_agricultural_gross_id);

  
          echo json_encode($irrigation);     
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
     'ahero_gross_value_of_crop_millions'=>'required|numeric',
      'ahero_hectares_cropped'=>'required|numeric',
      'ahero_number_of_plots_holders'=>'required|numeric',
      'ahero_paddy_yields_tonnes'=>'required|numeric',
        'ahero_payments_to_plot_holders_millions'=>'required|numeric',
       'all_schemes_gross_value_of_crop_millions'=>'required|numeric',
      'all_schemes_hectares_cropped'=>'required|numeric',
      'all_schemes_number_of_plots_holders'=>'required|numeric',
   
       'all_schemes_paddy_yields_tonnes'=>'required|numeric',
      'all_schemes_payments_to_plot_holders_millions'=>'required|numeric',
      'bunyala_gross_value_of_crop_millions'=>'required|numeric',
      'bunyala_hectares_cropped'=>'required|numeric',
     'bunyala_number_of_plots_holders'=>'required|numeric',
    'bunyala_paddy_yields_tonnes'=>'required|numeric',
       'bunyala_payments_to_plot_holders_millions'=>'required|numeric',
          'mwea_gross_value_of_crop_millions'=>'required|numeric',
             'mwea_hectares_cropped'=>'required|numeric',
 
                              
      'mwea_number_of_plots_holders'=>'required|numeric',
       'mwea_paddy_yields_tonnes'=>'required|numeric',
      'mwea_payments_to_plot_holders_million'=>'required|numeric',
      'perkerra_gross_value_of_crop_millions'=>'required|numeric',
      'perkerra_hectares_cropped'=>'required|numeric',
      'perkerra_number_of_plots_holders'=>'required|numeric',
      'perkerra_payments_to_plot_holders_millions'=>'required|numeric',
      'perkerra_seed_maize_tonnes'=>'required|numeric',
      'west_kano_gross_value_of_crop_millions'=>'required|numeric',
      'west_kano_hectares_cropped'=>'required|numeric',
      'west_kano_number_of_plots_holders'=>'required|numeric',
    'west_kano_paddy_yields_tonnes'=>'required|numeric',
 'west_kano_payments_to_plot_holders_millions'=>'required|numeric',
      'year'=>'required|numeric' 
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $irrigation =agriculture_irrigation_schemes_model::find($request->id);
         $irrigation->ahero_gross_value_of_crop_millions =$request->ahero_gross_value_of_crop_millions;
            $irrigation->ahero_hectares_cropped=$request->ahero_hectares_cropped;
            $irrigation->ahero_number_of_plots_holders=$request->ahero_number_of_plots_holders;
            $irrigation->ahero_paddy_yields_tonnes =$request->ahero_paddy_yields_tonnes;
            $irrigation->ahero_payments_to_plot_holders_millions=$request->ahero_payments_to_plot_holders_millions;
            $irrigation->all_schemes_gross_value_of_crop_millions=$request->all_schemes_gross_value_of_crop_millions;
            $irrigation->all_schemes_hectares_cropped=$request->all_schemes_hectares_cropped;
            $irrigation->all_schemes_number_of_plots_holders =$request->all_schemes_number_of_plots_holders;
       
            $irrigation->all_schemes_paddy_yields_tonnes=$request->all_schemes_paddy_yields_tonnes;
            $irrigation->all_schemes_payments_to_plot_holders_millions=$request->all_schemes_payments_to_plot_holders_millions;
            $irrigation->bunyala_gross_value_of_crop_millions=$request->bunyala_gross_value_of_crop_millions;
          
                  
            $irrigation->bunyala_number_of_plots_holders=$request->bunyala_number_of_plots_holders;
            $irrigation->bunyala_paddy_yields_tonnes=$request->bunyala_paddy_yields_tonnes;
            $irrigation->bunyala_payments_to_plot_holders_millions=$request->bunyala_payments_to_plot_holders_millions;
            $irrigation->bunyala_hectares_cropped=$request->bunyala_hectares_cropped;
            $irrigation->mwea_gross_value_of_crop_millions=$request->mwea_gross_value_of_crop_millions;
            $irrigation->mwea_hectares_cropped=$request->mwea_hectares_cropped;
            $irrigation->mwea_number_of_plots_holders=$request->mwea_number_of_plots_holders;
            $irrigation->mwea_paddy_yields_tonnes=$request->mwea_paddy_yields_tonnes;
            $irrigation->mwea_payments_to_plot_holders_million=$request->mwea_payments_to_plot_holders_million;
            $irrigation->perkerra_gross_value_of_crop_millions=$request->perkerra_gross_value_of_crop_millions;
            $irrigation->perkerra_hectares_cropped=$request->perkerra_hectares_cropped;
            $irrigation->perkerra_number_of_plots_holders=$request->perkerra_number_of_plots_holders;
            $irrigation->perkerra_payments_to_plot_holders_millions=$request->perkerra_payments_to_plot_holders_millions;
              $irrigation->perkerra_seed_maize_tonnes=$request->perkerra_seed_maize_tonnes;
             $irrigation->west_kano_gross_value_of_crop_millions=$request->west_kano_gross_value_of_crop_millions;

           $irrigation->west_kano_hectares_cropped=$request->west_kano_hectares_cropped;

            $irrigation->west_kano_number_of_plots_holders=$request->west_kano_number_of_plots_holders;
 

            $irrigation->west_kano_paddy_yields_tonnes=$request->west_kano_paddy_yields_tonnes;


            $irrigation->west_kano_payments_to_plot_holders_millions=$request->west_kano_payments_to_plot_holders_millions;

               $irrigation->year=$request->year;
            $irrigation->save();
             return response()->json($irrigation);
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
