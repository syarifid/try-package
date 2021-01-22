<?php

namespace Syarifid\TryPackage\Tests\Models;

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
}