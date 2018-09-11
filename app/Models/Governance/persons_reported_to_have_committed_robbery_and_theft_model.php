<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class persons_reported_to_have_committed_robbery_and_theft_model extends Model
{
    
    protected $primaryKey = 'offence_id';
    protected $table ='governance_persons_reported_to_have_committed_robbery_and_theft';
    protected $fillable =[  'offence',
       'male',
      'female',
       'year'

];



}
