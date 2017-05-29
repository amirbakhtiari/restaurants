<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GeneralGroup extends Model
{
    protected $primaryKey = 'iID';
    protected $table = 'generalgroups';
    protected $fillable = ['iID', 'sName', 'iTableID', 'iRecordID', 'date'];
    public $timestamps = false;
}
