<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_edstat_kcse_examination_results_model extends Model
{
    //
     protected $primaryKey = 'kcse_result_id';
    protected $table ='education_edstat_kcse_examination_results';
    protected $fillable =['number_of_candidates',
                          'kcse_grade',
                            'sex',
                                        
                          'year'
                         ];
}
