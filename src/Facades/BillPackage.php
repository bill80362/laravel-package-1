<?php

namespace BillVendor\BillPackage\Facades;

use Illuminate\Support\Facades\Facade;

class BillPackage extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'bill-package';
    }
}
