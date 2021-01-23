<?php

namespace Syarifid\TryPackage\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Schema;
use Syarifid\TryPackage\TryPackageServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Syarifid\\TryPackage\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            TryPackageServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        /*$app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);*/
        Schema::dropAllTables();

        
        include_once __DIR__.'/../database/migrations/create_try_package_table.php.stub';
        (new \CreateTryPackageTable())->up();
    }
}
