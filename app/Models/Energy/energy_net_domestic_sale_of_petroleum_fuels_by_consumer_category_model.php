<?php

namespace App\Models\Energy;

use Illuminate\Database\Eloquent\Model;

class energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category_model extends Model
{
    

 protected $primaryKey = 'domestic_sale_id';
    protected $table ='energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category';
    protected $fillable =[ 
                          'user',
                          'quantity_tonnes',
                           'year'

                         ];





}
