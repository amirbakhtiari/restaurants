<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    protected $primaryKey = "iID";
    protected $table = "factors";
    protected $fillable = ['iID', 'iPersonID', 'iPersonID2', 'iPersonnelID', 'sPerson', 'sPersonAddress', 'sPersonTel', 'iNum', 'date', 'dateDelivery', 'sDesc', 'dSum',
        'dSumAll', 'dProfit', 'dStuffsCost', 'iType', 'iStoreID', 'iSituation', 'dSumCount', 'iRowsCount', 'iProfitType', 'iNumOrg',
    'dDiscountPercent', 'dDiscount', 'bFromWeb', 'iDepartmentID', 'dGPSx', 'dGPSy', 'dGPSz'];
    public $timestamps = false;

    public function scopeDetail($query, $num) {
        $query->where('iNum', $num);
    }
}
