<?php

namespace Syarifid\TryPackage\Tests\Commands;

use Syarifid\TryPackage\Tests\TestCase;

/**
 *
 */
class TryPackageTest extends TestCase
{
    /** @test */
    public function try_package_command_works()
    {
        $this->artisan('try-package')->assertExitCode(0);
    }
}
