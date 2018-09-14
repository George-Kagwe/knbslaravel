<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class prison_population_by_sentence_duration_and_sex_model extends Model
{
   


    protected $primaryKey = 'category_id';
    protected $table ='governance_prison_population_by_sentence_duration_and_sex';
    protected $fillable =[  'category',
       'male',
      'female',
       'year'

];


   
}
