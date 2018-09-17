<?php

namespace App\Models\Energy;

use Illuminate\Database\Eloquent\Model;

class energy_generation_and_imports_of_electricity_model extends Model
{
    protected $primaryKey = 'electricity_id';
    protected $table ='energy_generation_and_imports_of_electricity';
    protected $fillable =[ 
                          'type',
                          'electricity_source',
                          'capacity_megawatts',
                           'year'

                         ];

}
