<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_edstat_kcpe_examination_results_by_subject_model extends Model
{
    //
    protected $primaryKey = 'kcpe_result_id';
    protected $table ='education_edstat_kcpe_examination_results_by_subject';
    protected $fillable =['kcpe_result',
                          'subject',
                                                  
                          'year'
                         ];
}
