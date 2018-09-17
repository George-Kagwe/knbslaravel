<?php

namespace App\Models\Energy;

use Illuminate\Database\Eloquent\Model;

class energy_installed_and_effective_capacity_of_electricity_model extends Model
{
        protected $primaryKey = 'capacity_id';
    protected $table ='energy_installed_and_effective_capacity_of_electricity';
    protected $fillable =[ 
                          'type',
                          'electricity_source',
                          'capacity_megawatts',
                           'year'

                         ];

}
