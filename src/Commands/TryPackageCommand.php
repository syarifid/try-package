<?php

namespace Syarifid\TryPackage\Commands;

use Illuminate\Console\Command;

class TryPackageCommand extends Command
{
    public $signature = 'try-package';

    public $description = 'My command';

    public function handle()
    {
        $outputText = config('try-package.command_output_text');

        $this->comment($outputText);
    }
}
