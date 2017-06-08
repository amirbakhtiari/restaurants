<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 06/06/17
 * Time: 11:30 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Builder;

class RestaurantFilters extends QueryFilters {
    public function name($name = '') {
        return $this->builder->where('sName', 'LIKE', '%' . $name . '%');
    }

    public function state($state = '') {
        if($state != 0)
            return $this->builder->where('sState', $state);
    }

    public function city($city = '') {
        if($city != 0)
            return $this->builder->where('sCity', $city);
    }

    public function zone($zone = '') {
        return $this->builder->where('sZone', 'LIKE', '%' . $zone . '%');
    }

    public function check($check) {
        return $this->builder->join('customfieldrecords', 'persons.iID', '=', 'customfieldrecords.iRecordID')
            ->where('customfieldrecords.iType', BOOLEAN_FILED)->where('customfieldrecords.iValue', $check)->groupBy('persons.iID');
    }

    public function type($type) {
        return $this->builder->join('customfieldrecords', 'persons.iID', 'customfieldrecords.iRecordID')->where('customfieldrecords.iType', LIST_ITEM_FIELD)
            ->where('customfieldrecords.iValue', $type);
    }
}
