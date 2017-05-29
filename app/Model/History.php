<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class History extends Model
{
    protected $table = "webloginhistory";
    protected $primaryKey = "iID";
    protected $fillable = ['iTableID', 'iRecordID', 'dateLogin', 'dVersion', 'sUserAgent', 'sServerSoftware', 'sServerName', 'sServerAddr', 'sServerPort'];
    public $timestamps = false;
    public static function log($record, $table = PERSONS) {

        self::create([
            'iTableID' => $table,
            'iRecordID' => $record,
            'dateLogin' => (new \DateTime()),
            'dVersion' => DB::table('properties')->where('sSection', 'Version')->where('sEntry', 'dVersion')->pluck('dValue')[0],
            'sUserAgent' => $_SERVER['HTTP_USER_AGENT'],
            'sServerSoftware' => $_SERVER['SERVER_SOFTWARE'],
            'sServerName' => $_SERVER['SERVER_NAME'],
            'sServerAddr' => getIpAddress(),
            'sServerPort' => $_SERVER['SERVER_PORT'],
        ]);
    }
}
