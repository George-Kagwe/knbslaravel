<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_record_sale_goverment_products_model extends Model
{
    //
     //
      protected $primaryKey = 'record_id';
    protected $table ='environment_and_natural_resources_record_sale_goverment_products';
    protected $fillable =['soft_wood',
                          'fuelwood_charcoal',
                          'power_and_telegraph',
                           'year'
                         ];
}
