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

    /** @test */
    public function try_config_file_value_is_used_as_output()
    {
        $this	->artisan('try-package')
                ->expectsOutput('Hi From Command')
                ->assertExitCode(0);

        $text = 'customized text';
        config()->set('try-package.command_output_text', $text);

        $this   ->artisan('try-package')
                ->expectsOutput($text)
                ->assertExitCode(0);
    }
}
