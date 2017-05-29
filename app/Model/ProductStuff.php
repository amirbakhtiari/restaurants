<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class ProductStuff extends Model
{
    protected $primaryKey = "iID";
    public $table = "productstuffs";
    
    /**
     * @param $stuff_id
     * @return mixed
     */
    public static function manufacturing($stuff_id) {
        return DB::table('productstuffs')
            ->join('stuffs', function($join) use($stuff_id) {
                $join->on('productstuffs.iStuffID', '=', 'stuffs.iID')
                    ->where('productstuffs.iProductID', '=', (int)$stuff_id);
            })->get();

    }
}
