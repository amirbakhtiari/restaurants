<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FactorStuff extends Model
{
    protected $primaryKey = "iID";
    protected $table = "factorstuffs";
    protected $fillable = ['iStuffID', 'dCount', 'dPrice',  'dDiscount', 'iFactorNum', 'iType', 'date', 'dAmount',
        'dProfit', 'dAvgBuyPrice', 'dBuyPrice', 'dMainStuffFactor'];
    
    public $timestamps = false;
    
}
