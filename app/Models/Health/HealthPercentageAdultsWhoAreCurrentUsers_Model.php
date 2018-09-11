<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthPercentageAdultsWhoAreCurrentUsers_Model extends Model
{
    //
      protected $primaryKey = 'user_id';
    protected $table ='health_percentage_adults_who_are_current_users';
    protected $fillable =['age_group',
                          'women',   
                           'men',                        
                          'category'
                         ];
}
