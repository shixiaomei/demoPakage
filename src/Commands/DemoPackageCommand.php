<?php

namespace bella\DemoPackage\Commands;

use Illuminate\Console\Command;

class DemoPackageCommand extends Command
{
    public $signature = 'demopackage';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
