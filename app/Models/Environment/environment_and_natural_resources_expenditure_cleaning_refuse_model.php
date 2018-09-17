<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_expenditure_cleaning_refuse_model extends Model
{
    //

    protected $primaryKey = 'development_id';
    protected $table ='environment_and_natural_resources_expenditure_cleaning_refuse';
    protected $fillable =['refuse_removal',
                          
                                                  
                          'year'
                         ];
}
