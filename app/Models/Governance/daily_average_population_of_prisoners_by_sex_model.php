<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class daily_average_population_of_prisoners_by_sex_model extends Model
{
    

    protected $primaryKey = 'daily_population_prisoners_id';
    protected $table ='governance_daily_average_population_of_prisoners_by_sex';
    protected $fillable =[  'category',
       'male',
      'female',
       'year'

];


    
}
