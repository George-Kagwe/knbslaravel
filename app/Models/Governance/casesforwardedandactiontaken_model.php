<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class casesforwardedandactiontaken_model extends Model
{
    protected $primaryKey = 'action_id';
    protected $table ='governance_cases_forwarded_and_action_taken';
    protected $fillable =['action_taken',
                          'no_of_recommendations',
                           'year'
                         ];



                     }
