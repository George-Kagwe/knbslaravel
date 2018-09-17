<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_number_of_candidates_by_sex_in_kcse_model extends Model
{
    //
    //
     protected $primaryKey = 'candidate_id';
    protected $table ='education_number_of_candidates_by_sex_in_kcse';
    protected $fillable =['number',
                          'proportion',
                            'gender',
                                        
                          'year'
                         ];
}
