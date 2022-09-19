<?php

namespace domain\Facades;

use domain\Services\GroupByOwnerService;
use Illuminate\Support\Facades\Facade;

class GroupByOwnerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return GroupByOwnerService::class;
    }
}
