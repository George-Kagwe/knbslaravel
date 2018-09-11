<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class persons_reported_tohave_committed_rape_model extends Model
{

    protected $primaryKey = 'persons_id';
    protected $table ='governance_persons_reported_tohave_committed_rape';
    protected $fillable =[  'number',
       'proportion',
      'gender',
       'year'

];

}
