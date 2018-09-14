<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthPercentageIncidenceOfDiseasesInKenya_Model extends Model
{
    //
      protected $primaryKey = 'incidence_id';
    protected $table ='health_percentage_incidence_of_diseases_in_kenya';
    protected $fillable =['percentage_incidence',
                          'disease',
                                                    
                          'year'
                         ];
}
