<?php

namespace App\Contracts;

/**
 * Interface RepositoryContracts
 * @package App\Contracts\Customer
 */
interface RepositoryContract
{
	/**
	 * @param string $modelName
	 *
	 * @return mixed
	 */
	public function repository(string $modelName);
}