<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class offences_committed_against_morality_model extends Model
{
   


    protected $primaryKey = 'offences_commiited_against_morality_id';
    protected $table ='governance_offences_committed_against_morality';
    protected $fillable =[  'category',
       'male',
      'female',
       'year'

];




}
