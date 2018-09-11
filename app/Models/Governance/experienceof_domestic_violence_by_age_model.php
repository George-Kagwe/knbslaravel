<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class experienceof_domestic_violence_by_age_model extends Model
{
    //


   protected $primaryKey = 'woman_id';
    protected $table ='governance_experienceof_domestic_violence_by_age';
    protected $fillable =[ 
       'age',
      'percentage_experienced_physical_violence',
      'percentage_experienced_sexual_violence',
      'percentage_experienced_physical_and_sexual_violence',
      'gender'                       


        ];



}
