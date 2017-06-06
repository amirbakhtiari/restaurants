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

    public function type($value = 0) {
        if($value != 0)
            $this->builder->where('iType', LIST_ITEM_FIELD)->where('iValue', $value);
    }

    public function check($value = 0) {
        if($value != 0)
            $this->builder->where('iType', BOOLEAN_FILED)->where('iValue', $value);
    }

    public function string($value = '') {
        return $this->builder->where('iType', STRING_FILED)->where('sValue', $value);
    }
}
