<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class AprrovedDegreeDiplomaPrograms_Model extends Model
{
    
    protected $primaryKey = 'approved_id';
    protected $table ='education_approved_degree_diploma_programs';
    protected $fillable =['approved_degree_programmes',
                          'approved_private_university_degreeprogrammes',
                          'validated_diploma_programmes',                          
                          'year'
                         ];
}
