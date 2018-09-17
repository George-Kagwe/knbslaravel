<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_value_of_total_mineral_model extends Model
{
    //
      protected $primaryKey = 'value_id';
    protected $table ='environment_and_natural_resources_value_of_total_mineral';
    protected $fillable =['category',
                          'description',
                          'amount',
                           'year'
                         ];
}
