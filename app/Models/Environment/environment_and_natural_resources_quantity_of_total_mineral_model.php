<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_quantity_of_total_mineral_model extends Model
{
    //
     protected $primaryKey = 'quantity_id';
    protected $table ='environment_and_natural_resources_quantity_of_total_mineral';
    protected $fillable =['category',
                          'description',
                          'amount',
                           'year'
                         ];
}
