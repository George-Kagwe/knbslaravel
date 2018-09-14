<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_government_forest_model extends Model
{
    //

     protected $primaryKey = 'govt_id';
    protected $table ='environment_and_natural_resources_government_forest';
    protected $fillable =['previous_plantation_area',
                          'area_planted',
                          'area_clear_felled',
                           
                          
                                                  
                          'year'
                         ];
}
