<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $primaryKey = "iID";
    public $timestamps = false;
    protected $fillable = ['iID', 'iPersonID', 'iProductID', 'iComplainterID', 'iComplainterType', 'iCode', 'sTitle', 'sDesc', 'dateCreate', 'iData1', 'dPercent'];
}
