<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    protected $primaryKey = "iID";
    protected $table = "stuffs";
    protected $hidden = ['oPicture'];
    
//    protected $guarded = [];
}
