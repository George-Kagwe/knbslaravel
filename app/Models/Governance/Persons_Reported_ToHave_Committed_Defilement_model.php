<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class Persons_Reported_ToHave_Committed_Defilement_model extends Model
{


    protected $primaryKey = 'persons_id';
    protected $table ='governance_persons_reported_tohave_committed_defilement';
    protected $fillable =[  'number',
       'proportion',
      'gender',
       'year'

];




    
    }
