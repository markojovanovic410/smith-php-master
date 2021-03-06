<?php

namespace App\Models\Common;
use App\Models\BaseModel;


class ProviderBankdetail extends BaseModel
{

	protected $connection = 'common';
    protected $table = 'bankdetails';

	
	protected $hidden = [
     	'created_type', 'created_by', 'modified_type', 'modified_by', 'deleted_type', 'deleted_by', 'created_at', 'updated_at', 'deleted_at'
    ];

    public function title()
    {
        return $this->belongsTo('App\Models\Common\CountryBankForm', 'bankform_id', 'id');
    }

   
    
}
