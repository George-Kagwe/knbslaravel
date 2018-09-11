<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class agriculture_chemical_med_feed_input_model extends Model
{



 
    protected $primaryKey = 'chemical_med_feed_inputs_id';
    protected $table ='agriculture_chemical_med_feed_input';
    protected $fillable =[   'cattle_feed',
      'dips_spray_fluids',
      'fungicides',
      'herbicides',
     'insecticides',
      'other_feeds',
      'other_livestock_drugs',
      'pig_feed',
       'plant_hormones',
      'poultry_feed',
      'vaccines',
      'year'
                         ];


}
