<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class offenders_serving_model extends Model
{
    

    protected $primaryKey = 'offence_id';
    protected $table ='governance_offenders_serving';
    protected $fillable =[  'offence',
       'male',
      'female',
      'category',
       'year'

];


}
