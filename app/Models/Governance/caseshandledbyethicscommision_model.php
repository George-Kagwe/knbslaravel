<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class caseshandledbyethicscommision_model extends Model
{
   protected $primaryKey = 'cases_handled_id';
    protected $table ='governance_cases_handled_by_ethics_commision';
    protected $fillable =['action_taken',
                          'no_cases',
                           'year'
                         ];
}
