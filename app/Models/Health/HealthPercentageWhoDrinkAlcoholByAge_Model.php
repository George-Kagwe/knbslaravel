<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthPercentageWhoDrinkAlcoholByAge_Model extends Model
{
    //
      protected $primaryKey = 'percentage_id';
    protected $table ='health_percentage_who_drink_alcohol_by_age';
    protected $fillable =['age',
                          'women',
                           'men'                        
                          
                         ];
}
