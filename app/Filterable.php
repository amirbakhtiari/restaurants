<?php
/**
 * Created by PhpStorm.
 * User: amir.bakhtiari@ymail.com
 * Date: 06/06/17
 * Time: 11:28 AM
 */

namespace App;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    /**
     * @param $query
     * @param QueryFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, QueryFilters $filters) {
        return $filters->apply($query);
    }
}