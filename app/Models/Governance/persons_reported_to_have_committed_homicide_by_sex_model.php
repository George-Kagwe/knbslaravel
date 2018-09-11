<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class persons_reported_to_have_committed_homicide_by_sex_model extends Model
{
   

    protected $primaryKey = 'offence_id';
    protected $table ='governance_persons_reported_to_have_committed_homicide_by_sex';
    protected $fillable =[  'offence',
       'male',
      'female',
       'year'

];



}
