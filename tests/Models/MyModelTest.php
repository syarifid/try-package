<?php

namespace Syarifid\TryPackage\Tests\Models;

use DB;
use Syarifid\TryPackage\Models\MyModel;
use Syarifid\TryPackage\Tests\TestCase;

/**
 * Test MyModel
 */
class MyModelTest extends TestCase
{
    /** @test */
    public function it_can_create_a_model()
    {

        /** @var MyModel $model */
        $model = MyModel::create(['name' => 'John']);

        $this->assertDatabaseCount('my_models', 1);

        $this->assertEquals('JOHN', $model->getUpperCasedName());
    }

    /** @test */
    public function it_can_use_json_queries()
    {
    	$models = DB::table('my_models')
    		->whereJsonContains('option->languages', 'en')
    		->get();

    	$this->assertCount(0, $models);
    }
}
