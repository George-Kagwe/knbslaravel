<?php

namespace App\Models\Labour;

use Illuminate\Database\Eloquent\Model;

class LabourMemorandumItemsInPublicSector_Model extends Model
{
    //
      protected $primaryKey = 'memorandum_item_id';
    protected $table ='labour_memorandum_items_in_public_sector';
    protected $fillable =['memorandum_item',
                          'wage_earnings',
                           'year'
                         
                         ];
}
