<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_distribution_abovefifteen_ability_readwrite_model extends Model
{
    //
    protected $primaryKey = 'distribution_id';
    protected $table ='education_distribution_abovefifteen_ability_readwrite';
    protected $fillable =[  'county_id',
  
      'literate',
      'illiterate',
      'not_stated',
      'no_of_individuals',
      'gender'
      
        
                         ];
}
