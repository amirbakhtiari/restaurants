<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomFields extends Model
{
    protected $primaryKey = 'iID';
    protected $table = "customfields";
}
