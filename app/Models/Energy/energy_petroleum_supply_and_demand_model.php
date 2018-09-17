<?php

namespace App\Models\Energy;

use Illuminate\Database\Eloquent\Model;

class energy_petroleum_supply_and_demand_model extends Model
{
      protected $primaryKey = 'petroleum_id';
    protected $table ='energy_petroleum_supply_and_demand';
    protected $fillable =[ 
                          'type',
                          'petroleum_product',
                          'quantity_tonnes',
                           'year'

                         ];
}
