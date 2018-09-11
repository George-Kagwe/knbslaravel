<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class Experienceof_Domestic_Violence_By_Residence_model extends Model
{
   

   protected $primaryKey = 'woman_id';
    protected $table ='governance_experienceof_domestic_violence_by_residence';
    protected $fillable =[ 
       'residence',
      'percentage_experienced_physical_violence',
      'percentage_experienced_sexual_violence',
      'percentage_experienced_physical_and_sexual_violence',
      'gender'                       

];

}
