<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_average_export_prices_ash_model extends Model
{
    //


    protected $primaryKey = 'average_id';
    protected $table ='environment_and_natural_resources_average_export_prices_ash';
    protected $fillable =['soda_ash',
                          'fluorspar',
                           'year'
                         ];
}
