<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class QueryFilters
{
    protected $request;
    protected $builder;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;
        foreach ($this->filters() as $name => $value) {
            if (!method_exists($this, $name)) {
                continue;
            }

            if(!is_array($value)) {
                if (strlen($value)) {
                    $this->$name($value);
                } else {
                    $this->$name();
                }
            } else {
                foreach ($value as $index => $item) {
                    if (strlen($item)) {
                        $this->$name($item);
                    } else {
                        $this->$name();
                    }
                }
            }
        }
        return $this->builder;
    }

    public function filters()
    {
        return $this->request->all();
    }
}