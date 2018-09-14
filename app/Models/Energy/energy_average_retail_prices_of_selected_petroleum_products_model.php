<?php

namespace App\Models\Energy;

use Illuminate\Database\Eloquent\Model;

class energy_average_retail_prices_of_selected_petroleum_products_model extends Model
{
 protected $primaryKey = 'retail_price_id';
    protected $table ='energy_average_retail_prices_of_selected_petroleum_products';
    protected $fillable =[ 
                          'petroleum_product',
                          'retail_price_ksh',
                          'month',
                           'year'

                         ];

}
