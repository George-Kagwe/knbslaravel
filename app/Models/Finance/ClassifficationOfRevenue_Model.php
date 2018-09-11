<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class ClassifficationOfRevenue_Model extends Model
{
    protected $primaryKey = 'economicrevenue_id';
    protected $table ='finance_economic_classification_revenue';
    protected $fillable =['taxes_income_profits_capitalgains',
                          'taxes_property',
                          'taxes_vat',
                          'taxes_othergoodsandservices',
                          'taxes_internationaltrade_transactions',
                          'other_taxes_notelsewhereclassified',
                          'totaltax_revenue',
                          'socialsecuritycontributions',
                          'property_income',
                          'sale_goodsandservices',
                          'fines_penaltiesandforfeitures',
                          'repayments_domesticlending',
                          'other_receiptsnotelsehereclassified',
                          'total_nontax_revenue',
                          'total',
                          'year'
                         ];
}
