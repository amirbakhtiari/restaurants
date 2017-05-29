<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Class Person
 * @package App\Model
 */
class Person extends Model
{
    public $timestamps = false;
    protected $primaryKey = "iID";
    protected $table = "persons";
    protected $fillable = ['iID', 'sName', 'sFamily', 'sNationalCode', 'sEmail', 'sTel1', 'sMobile1', 'sDesc', 'iKind', 'bReal',
        'sPerson', 'sAddress', 'sCode', 'dateCreate', 'sWebUserName', 'sWebPassword', 'dateWebCreate', 'iWebState', 'sCompany', 'iCode', 'sWebActiveCode', 'iHesabTafsilyCode', 'iHesabTafsilyCode2', 'iMr', 'sCity', 'sState', 'dGPSx', 'dGPSy'];
    protected $perPage = 30;
    private static $filed = ['iID', 'iWebState', 'iKind', 'iCode', 'sName', 'sEmail', 'sTel1', 'sFamily', 'dateCreate', 'dateWebCreate', 'sMobile1', 'sWebUserName', 'sWebPassword', 'iMr', 'dateBirth', 'sDesc'];
    /**
     * @param $username
     * @return bool
     */
    public static function user_exists($username, $type = SELLER) {
        return self::where('sWebUserName', trim($username))->where('iKind', $type)->count() > 0;
    }
    /**
     * @param $username
     * @param $password
     * @param int $type
     * @return bool
     */
    public static function login($username, $password, $type = CUSTOMER) {
        $find = self::select('iID')->where('sWebUserName', $username)->where('sWebPassword', md5($password))->where('iKind', $type)->count();
        if($find) {
            return self::select(self::$filed)->where('sWebUserName', $username)->where('sWebPassword', md5($password))->where('iKind', $type)->first();
        }
        return false;
    }
    /**
     * @param $request
     * @param int $type
     * @return int
     */
    public static function register($request, $type = SELLER) {
        $code = self::max('iCode') + 1;
        $codeTafsily = self::max('iHesabTafsilyCode') + 1;
        $codeTafsily2 = self::max('iHesabTafsilyCode2') + 1;
        $activateCode = Person::max('sWebActiveCode') + rand();
        switch($type) {
            case SELLER:
                DB::beginTransaction();
                $seller = self::create([
                    'iWebState'         => 0,
                    'bReal'             => 0,
                    'iCode'             => $code,
                    'sPerson'           => $request->name . " " . $request->family,
                    'iHesabTafsilyCode' => $codeTafsily,
                    'iHesabTafsilyCode2'=> $codeTafsily2,
//                    'sFamily'         => $request->family,
                    'dGPSx'             => $request->latitude,
                    'dGPSy'             => $request->longitude,
                    'sWebUserName'      => trim($request->username),
                    'sMobile1'          => trim($request->username),
                    'sWebPassword'      => md5(trim($request->password)),
                    'sNationalCode'     => $request->nationalCode,
                    'sCode'             => $request->licenseCode,
                    'sEmail'            => trim($request->email),
                    'sTel1'             => $request->landlinePhone,
//                    'sMobile1'        => $request->mobile,
                    'sAddress'          => $request->address,
                    'sDesc'             => $request->desc,
                    'iKind'             => $type,
                    'sName'             => trim($request->restaurantName),
                    'sCompany'          => trim($request->restaurantEnName),
                    'dateCreate'        => (new \DateTime()),
                    'dateWebCreate'     => (new \DateTime()),
                    'sCity'             => $request->city,
                    'sState'            => ($request->state == 1) ? "البرز" : ($request->state == 2) ? "هرمزگان" : "",
                    'sWebActiveCode'    => $activateCode
                ]);
                DB::commit();
                return (int)$seller->iID;
                break;
            case CUSTOMER:
                DB::beginTransaction();
                $customer = self::create([
                    'bReal'             => 1,
                    'iWebState'         => 0,
                    'iKind'             => $type,
                    'iCode'             => $code,
                    'iHesabTafsilyCode' => $codeTafsily,
                    'iHesabTafsilyCode2'=> $codeTafsily2,
                    'sName'             => trim($request->name),
                    'sEmail'            => trim($request->email),
                    'sTel1'             => trim($request->phone),
                    'sFamily'           => trim($request->family),
                    'dateCreate'        => (new \DateTime()),
                    'dateWebCreate'     => (new \DateTime()),
                    'sMobile1'          => $request->mobile,
                    'sWebUserName'      => $request->username,
                    'sWebPassword'      => md5($request->password)
                ]);
                DB::commit();
                return (int)$customer->iID;
                break;
        }

    }

    /**
     * @param array $array
     * @param int $type
     * @return bool
     */
    public static function has(array $array , $type = SELLER) {
        return self::where($array['field'], $array['value'])->where('iKind', $type)->count() > 0;
    }

    public function scopeSeller($query) {
        return $query->where('iKind', SELLER);
    }

    public function scopeRestaurant($query) {
        return $query->where('iWebState', ACTIVE_STATE)/*->where('iKind', SELLER)*/;
    }
}
