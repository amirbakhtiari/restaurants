<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $primaryKey = "iID";
    protected $table = "restaurantfavorite";
    public $timestamps = false;
    protected  $fillable = ['iPersonID', 'iUserID', 'iGroupID', 'dateCreate', 'sDesc'];
}
