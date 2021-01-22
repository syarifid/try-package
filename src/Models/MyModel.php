<?php

namespace Syarifid\TryPackage\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @see \Syarifid\TryPackage\Models\Model
 */
class MyModel extends Model
{
	
	public $guarded = [];

	public function getUpperCasedName(): string
	{
		return strtoupper($this->name);
	}

}