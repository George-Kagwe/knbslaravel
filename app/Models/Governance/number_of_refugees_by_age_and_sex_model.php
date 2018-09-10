<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class number_of_refugees_by_age_and_sex_model extends Model
{
    



    protected $primaryKey = 'category_id';
    protected $table ='governance_number_of_refugees_by_age_and_sex';
    protected $fillable =[  'children',
       'adult',
      'gender',
       'year'

];


}
