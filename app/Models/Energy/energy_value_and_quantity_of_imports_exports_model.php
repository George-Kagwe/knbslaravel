<?php

namespace App\Models\Energy;

use Illuminate\Database\Eloquent\Model;

class energy_value_and_quantity_of_imports_exports_model extends Model
{
  protected $primaryKey = 'petroleum_id';
    protected $table ='energy_value_and_quantity_of_imports_exports';
    protected $fillable =[ 
                          'type',
                          'petroleum_product',
                          'quantity_tonnes',
                          'value_millions',
                           'year'

                         ];
}
