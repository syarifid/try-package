<?php

namespace Syarifid\TryPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Syarifid\TryPackage\TryPackage
 */
class TryPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'try-package';
    }
}
