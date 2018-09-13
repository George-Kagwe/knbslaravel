<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthCurrentUseOfContraceptionByCounty_Model extends Model
{
    //
         protected $primaryKey = 'contraception_id';
    protected $table ='health_current_use_of_contraception_by_county';
    protected $fillable =[ 'county_id',
    	'any_modem_method'
                                                  
                         ];
}
