<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "personaddresses";
    protected $primaryKey = "iID";
    protected $fillable = ['iID', 'iPersonID', 'sTitle', 'sCity', 'sAddress', 'sTel1', 'date'];
    public $timestamps = false;
    public function user() {
//        return $this->
    }
}
