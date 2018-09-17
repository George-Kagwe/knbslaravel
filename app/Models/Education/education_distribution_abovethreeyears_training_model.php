<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_distribution_abovethreeyears_training_model extends Model
{
    //
        protected $primaryKey = 'distribution_id';
    protected $table ='education_distribution_abovethreeyears_training';
    protected $fillable =[ 'county_id',
  
      'ever_attended',
      'never_attended',
      'not_stated',
      'no_of_individuals'
        
                         ];
}
