<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class Prevalence_Female_Circumcision_And_Type_model extends Model
{
    


 protected $primaryKey = 'persons_id';
    protected $table ='governance_prevalence_female_circumcision_and_type';
    protected $fillable =[ 
        'age',
      'cut_no_flesh_removed',
      'cut_flesh_removed',
      'sewn_closed',
      'others', 
    'percentage_women_circumcised'  

        ];



    }
