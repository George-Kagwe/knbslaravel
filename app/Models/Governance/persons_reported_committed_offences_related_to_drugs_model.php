<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class persons_reported_committed_offences_related_to_drugs_model extends Model
{
    

    protected $primaryKey = 'offence_id';
    protected $table ='governance_persons_reported_committed_offences_related_to_drugs';
    protected $fillable =[  'offence',
       'male',
      'female',
       'year'

];


}
