<?php

namespace domain\Facades;

use domain\Services\IndexService;
use Illuminate\Support\Facades\Facade;

class IndexFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return IndexService::class;
    }
}
