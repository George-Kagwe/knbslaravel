<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class convicted_prison_population_by_age_and_sex_model extends Model
{
   


    protected $primaryKey = 'convict_population';
    protected $table ='governance_convicted_prison_population_by_age_and_sex';
    protected $fillable =[  'category',
       'male',
      'female',
       'year'

];


}
