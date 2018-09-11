<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class finance_national_government_expenditure_model extends Model
{
    
  protected $primaryKey = 'government_expenditure_id';
    protected $table ='finance_national_government_expenditure';
    protected $fillable =[ 
     'acquisition_nonfinancial_assets',
      'acquisition_financial_assets',
      'loans_repayments',
      'compensation_employees',
      'goods_services',
      'subsidies',
      'interest',
      'grants',
      'other_expense',
      'social_benefits',
      'capital_grants',
      'total',
      'year'


                         ];


                              

    }
