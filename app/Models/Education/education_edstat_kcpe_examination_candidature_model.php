<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_edstat_kcpe_examination_candidature_model extends Model
{
    //

    protected $primaryKey = 'candidature_id';
    protected $table ='education_edstat_kcpe_examination_candidature';
    protected $fillable =['kcpe_candidature',
                          'gender',
                                           
                          'year'
                         ];
}
