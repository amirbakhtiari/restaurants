<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 06/06/17
 * Time: 11:28 AM
 */

namespace App;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    public function scopeFilter($query, QueryFilters $filters) {
        return $filters->apply($query);
    }
}