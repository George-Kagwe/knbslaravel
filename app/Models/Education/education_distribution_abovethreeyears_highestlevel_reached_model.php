<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_distribution_abovethreeyears_highestlevel_reached_model extends Model
{
    //
           protected $primaryKey = 'distribution_id';
    protected $table ='education_distribution_abovethreeyears_highestlevel_reached';
    protected $fillable =[  'county_id',
  
      'pre_primary',
      'primary',
      'post_primary',
      'secondary',
      'college',
      'university',
      'madrassa_duksi',
      'other',
      'not_stated',
      'no_of_individuals'
        
                         ];
}
