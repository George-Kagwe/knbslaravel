<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class governance_environmental_crimes_reported_to_nema_model extends Model
{
    //
    protected $primaryKey = 'crime_id';
    protected $table ='governance_environmental_crimes_reported_to_nema';
    protected $fillable =['type_of_case',
                          'no_of_cases',
                          
                           'year'
                         ];

}
