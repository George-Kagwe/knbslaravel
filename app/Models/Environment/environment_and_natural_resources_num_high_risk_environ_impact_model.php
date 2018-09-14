<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_num_high_risk_environ_impact_model extends Model
{
    //

     protected $primaryKey = 'risk_id';
    protected $table ='environment_and_natural_resources_num_high_risk_environ_impact';
    protected $fillable =['transport_and_communication',
                          'energy',
                          'tourism',
                          'mining_and_quarrying',
                          'human_settlements_and_Infrastructure',
                           'agriculture_and_forestry',
                           'commerce_and_industry',
                            'water_resources',
                                   
                          'year'
                         ];
}
