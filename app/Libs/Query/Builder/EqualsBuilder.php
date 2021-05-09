<?php


namespace App\Libs\Query\Builder;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class EqualsBuilder extends AbstractBuilder {

    public function build(Builder $query, array $params): Builder {
        $args = array_filter(explode('|', Arr::get($params, 'eq', '')));
        if (count($args) == 0) return $this->next->build($query, $params);

        $builder = $query;
        foreach ($args as $arg) {
            $tmp = explode(':', $arg);
            if (count($tmp) != 2) continue;
            if ($tmp[1] == 'null' || $tmp[1] == '') {
                $builder = $builder->whereNull($tmp[0]);
            } else {
                $builder = $builder->where($tmp[0], $tmp[1]);
            }
        }
        return $this->next->build($builder, $params);
    }
}
