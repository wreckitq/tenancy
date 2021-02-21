<?php

namespace Wreckitq\Tenancy\Commands;

use Illuminate\Console\Command;

class TenancyCommand extends Command
{
    public $signature = 'tenancy';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
