<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class agriculture_irrigation_schemes_model extends Model
{
  
 protected $primaryKey = 'irrigation_schemes_id';
    protected $table ='agriculture_irrigation_schemes';
    protected $fillable =[       
   'ahero_gross_value_of_crop_millions',
      'ahero_hectares_cropped',
      'ahero_number_of_plots_holders',
      'ahero_paddy_yields_tonnes',
        'ahero_payments_to_plot_holders_millions',
       'all_schemes_gross_value_of_crop_millions',
      'all_schemes_hectares_cropped',
      'all_schemes_number_of_plots_holders',
  
       'all_schemes_paddy_yields_tonnes',
      'all_schemes_payments_to_plot_holders_millions',
      'bunyala_gross_value_of_crop_millions',
      'bunyala_hectares_cropped',
     'bunyala_number_of_plots_holders',
    'bunyala_paddy_yields_tonnes',
       'bunyala_payments_to_plot_holders_millions',
          'mwea_gross_value_of_crop_millions',
             'mwea_hectares_cropped',
 
                              
      'mwea_number_of_plots_holders',
       'mwea_paddy_yields_tonnes',
      'mwea_payments_to_plot_holders_million',
      'perkerra_gross_value_of_crop_millions',
      'perkerra_hectares_cropped',
      'perkerra_number_of_plots_holders',
      'perkerra_payments_to_plot_holders_millions',
      'perkerra_seed_maize_tonnes',
      'west_kano_gross_value_of_crop_millions',
      'west_kano_hectares_cropped',
      'west_kano_number_of_plots_holders',
      'west_kano_paddy_yields_tonnes',
     'west_kano_payments_to_plot_holders_millions',
      'year'  
                         ];
}
