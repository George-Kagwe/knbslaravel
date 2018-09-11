<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class agriculture_valueofagriculturalinputs_model extends Model
{
    


  protected $primaryKey = 'value_of_agricultural_inputs_id';
    protected $table ='agriculture_valueofagriculturalinputs';
    protected $fillable =[       'accounting_secretarial_and_auditing_services',
      'aerial_spraying',
      'artificial_insemination',
      'bags',
      'farm_planning_and_survey_services',
       'fertilizers',
      'fuel',
      'government_seed_inspection_services',
      'government_veterinary_inoculation_services',
       'insurance',
      'livestock_drugs_and_medicines',
      'manufactured_feeds',
      'marketing_research_and_publicity',
                              
      'office_expenses',
       'other',
      'other_material_inputs',
      'other_agricultural_chemicals',
      'power',
      'private_veterinary_services',
      'seeds',
      'small_implements',
      'spares_and_maintenance_of_machinery',
      'tractor_services',
      'transportation',
      'year'  
                
                         ];


}
