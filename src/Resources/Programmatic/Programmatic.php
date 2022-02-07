<?php

namespace Bildvitta\IssCredito\Resources\Programmatic;

class Programmatic extends ProgrammaticResource
{
    public function processes(): Process
    {
        return new Process($this);
    }
}
