<?php

namespace App\Http\Controllers;

use App\Http\Requests\DuplicateValueRequest;
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
    public function getDuplicateValues(DuplicateValueRequest $request)
    {
        return IndexFacade::duplicateValue($request['array']);
    }
}
