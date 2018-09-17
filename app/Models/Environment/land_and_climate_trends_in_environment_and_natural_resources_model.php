<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class land_and_climate_trends_in_environment_and_natural_resources_model extends Model
{
    //
     protected $primaryKey = 'industry_id';
    protected $table ='land_and_climate_trends_in_environment_and_natural_resources';
    protected $fillable =['industry',
                          'value_added',
                          
                           'year'
                         ];
}
