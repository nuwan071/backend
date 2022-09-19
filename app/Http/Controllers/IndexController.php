<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArrayRequest;
use domain\Facades\GroupByOwnerFacade;
use domain\Facades\IndexFacade;
use Illuminate\Http\Request;

class IndexController extends Controller
{    
    /**
     * Get Duplicate Values
     *
     * @param  mixed $request
     * @return void
     */
    public function getDuplicateValues(ArrayRequest $request)
    {
        return IndexFacade::duplicateValue($request['array']);
    }
    
    /**
     * group By Owners
     *
     * @param  mixed $request
     * @return void
     */
    public function groupByOwners(ArrayRequest $request)
    {
        return GroupByOwnerFacade::groupByOwner($request['array']);
    }
}
