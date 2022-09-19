<?php

namespace domain\Services;

/**
 * Index Service
 * php version 8
 *
 * @category Service
 * */
class GroupByOwnerService
{
    /**
     * Duplicate Value
     *
     * @param  mixed $array
     * @return void
     */
    public function groupByOwner($array)
    {
        $result = [];

        foreach ($array as $key => $value) {
            $result[$value][] = $key;
        }

        return $result;        
    }
}
