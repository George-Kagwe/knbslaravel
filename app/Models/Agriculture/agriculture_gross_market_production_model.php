<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class agriculture_gross_market_production_model extends Model
{
    

 protected $primaryKey = 'gross_market_production_at_constant_id';
    protected $table ='agriculture_gross_market_production';
    protected $fillable =[        'cattle_and_calves_for_slaughter',
      'sugarcane',
      'vegetables',
      'cutflowers',
          'tea',

       'fruits',
      'poultry_and_eggs',
      'wheat',
      'sheep_goats_and_lambs_for_slaughter',
       'maize',
      'coffee',
      'barley',
       'dairy_products',
        'cotton',
       'hides_and_skins',
        'other_cereals',
       'pigs_for_slaughter',
      'other_temporary_crops',
      'wool',
                              
      'potatoes',
       'pulses',
      'pyrethrum',
      'rice_paddy',
      'tobacco',
      'total_crops',
      'grand_total',
  
      'year'
                
                         ];









}
