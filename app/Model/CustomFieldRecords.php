<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Filterable;

class CustomFieldRecords extends Model
{
//    use Filterable;

    protected $primaryKey = "iID";
    protected $table = "customfieldrecords";
    public $timestamps = false;

    public function person() {
        return $this->belongsTo('App\Model\Person', 'iID', 'iRecordID');
    }
}
