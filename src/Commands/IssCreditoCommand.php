<?php

namespace Bildvitta\IssCredito\Commands;

use Illuminate\Console\Command;

class IssCreditoCommand extends Command
{
    public $signature = 'iss-credito';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
