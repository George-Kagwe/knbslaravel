<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthPlaceOfDelivery_Model extends Model
{
    //
      protected $primaryKey = 'place_id';
    protected $table ='health_place_of_delivery';
    protected $fillable =['number',
                          'place',   
                                                 
                          'year'
                         ];
}
