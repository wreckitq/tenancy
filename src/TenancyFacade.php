<?php

namespace Wreckitq\Tenancy;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wreckitq\Tenancy\Tenancy
 */
class TenancyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tenancy';
    }
}
