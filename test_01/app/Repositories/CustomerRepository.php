<?php

namespace App\Repositories;

use App\Models\Customer;

/**
 * Class CustomerRepository
 * @package App\Repositories
 */
class CustomerRepository extends ModelRepository
{
	/**
	 * CustomerRepository constructor.
	 */
	public function __construct()
	{
		$this->modelName = Customer::class;
	}
}
