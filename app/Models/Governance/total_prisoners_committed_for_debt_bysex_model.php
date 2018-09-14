<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class total_prisoners_committed_for_debt_bysex_model extends Model
{

    protected $primaryKey = 'persons_id';
    protected $table ='governance_total_prisoners_committed_for_debt_bysex';
    protected $fillable =[  'number',
       'proportion',
      'gender',
       'year'

];


    //
}



