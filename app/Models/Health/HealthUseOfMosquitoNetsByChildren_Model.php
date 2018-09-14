<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthUseOfMosquitoNetsByChildren_Model extends Model
{
    //
           protected $primaryKey = 'use_mosquito_net_id';
    protected $table ='health_use_of_mosquito_nets_by_children';
    protected $fillable =[ 'county_id',
    	'children_under_five_years_who_slept_under_nets_last_night'
                                                  
                         
                         ];
}
