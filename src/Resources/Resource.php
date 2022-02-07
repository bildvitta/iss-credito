<?php

namespace Bildvitta\IssCredito\Resources;

use Bildvitta\IssCredito\IssCredito;

class Resource
{
    protected const ENDPOINT_PREFIX = '/programmatic/';

    protected const ENDPOINT_FIND_BY_UUID = self::ENDPOINT_PREFIX . '/%s';

    protected IssCredito $issCredito;

    public function __construct(IssCredito $issCredito)
    {
        $this->issCredito = $issCredito;
    }
}
