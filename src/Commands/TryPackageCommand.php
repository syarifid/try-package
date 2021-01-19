<?php

namespace Syarifid\TryPackage\Commands;

use Illuminate\Console\Command;

class TryPackageCommand extends Command
{
    public $signature = 'try-package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
