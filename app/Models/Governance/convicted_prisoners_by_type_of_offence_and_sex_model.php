<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class convicted_prisoners_by_type_of_offence_and_sex_model extends Model
{
    

    protected $primaryKey = 'convicted_offence_type';
    protected $table ='governance_convicted_prisoners_by_type_of_offence_and_sex';
    protected $fillable =[  'offence',
       'male',
      'female',
       'year'

];

}
