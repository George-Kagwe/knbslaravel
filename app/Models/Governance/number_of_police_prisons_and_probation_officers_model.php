<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class number_of_police_prisons_and_probation_officers_model extends Model
{
    




    protected $primaryKey = 'category_id';
    protected $table ='governance_number_of_police_prisons_and_probation_officers';
    protected $fillable =[  'category',
       'male',
      'female',
       'year'

];


}
