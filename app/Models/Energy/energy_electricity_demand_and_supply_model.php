<?php

namespace App\Models\Energy;

use Illuminate\Database\Eloquent\Model;

class energy_electricity_demand_and_supply_model extends Model
{
 protected $primaryKey = 'electricity_id';
    protected $table ='energy_electricity_demand_and_supply';
    protected $fillable =[ 
                          'demand_supply',
                          'capacity_megawatts',
                        
                           'year'

                         ];

}
