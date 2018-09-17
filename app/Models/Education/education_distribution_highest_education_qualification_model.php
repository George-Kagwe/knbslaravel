<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_distribution_highest_education_qualification_model extends Model
{
    //
      protected $primaryKey = 'distribution_id';
    protected $table ='education_distribution_highest_education_qualification';
    protected $fillable =[ 'county_id',
  
      'none',
      'cpe_kcpe',
      'kape',
      'kjse',
        'kce_kcse',
          'kace_eaace',
            'certificate',
              'diploma',
                'degree',
                  'post_literacy_cert',
                    'other',
                      'not_stated',
                        'no_of_individuals'
                         ];
}
