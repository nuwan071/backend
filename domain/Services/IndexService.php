<?php

namespace domain\Services;

/**
 * Index Service
 * php version 8
 *
 * @category Service
 * */
class IndexService
{
    /**
     * Duplicate Value
     *
     * @param  mixed $array
     * @return void
     */
    public function duplicateValue($array)
    {
        // remove duplicate value from array
        $unique     = array_unique($array); 

        //compares the keys of more than one
        $diffKeys   = array_diff_key($array, $unique);

        $output = array_unique($diffKeys);

        return join(' ', $output);
    }
}
