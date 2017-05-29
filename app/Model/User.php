<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
   protected $primaryKey = "iID";

   public static function register($data) {

   }

   public static function login($data) {

   }
}
