<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class Knowledge_And_Prevalence_Of_Female_Circumcision_model extends Model
{
   
 protected $primaryKey = 'woman_id';
    protected $table ='governance_knowledge_and_prevalence_of_female_circumcision';
    protected $fillable =[ 
       'age',
      'percentage_women_heard_of_FC',
      'percentage_women_not_heard_of_FC',
      'year'
                   


        ];




}
