<?php

namespace Bildvitta\IssCredito\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bildvitta\IssCredito\IssCredito
 */
class IssCredito extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'iss-credito';
    }
}
