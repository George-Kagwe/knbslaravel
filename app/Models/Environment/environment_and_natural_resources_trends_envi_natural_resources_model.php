<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_trends_envi_natural_resources_model extends Model
{
    //
    protected $primaryKey = 'trend_id';
    protected $table ='environment_and_natural_resources_trends_envi_natural_resources';
    protected $fillable =['forestry_and_logging',
                          'fishing_and_aquaculture',
                          'mining_and_quarrying',
                          'water_supply',
                          'GDP_at_current_prices',
                          'resource_as_percent_of_GDP	',
                           'year'
                         ];
}
