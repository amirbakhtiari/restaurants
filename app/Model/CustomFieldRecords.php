<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomFieldRecords extends Model
{

    protected $primaryKey = "iID";
    protected $table = "customfieldrecords";
    public $timestamps = false;
}
