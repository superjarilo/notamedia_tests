<?php

namespace App\Contracts;

/**
 * Interface JsonContract
 * @package App\Contracts
 */
interface JsonResponseContract
{
	/**
	 * @param array $data
	 *
	 * @return mixed
	 */
	public function getJsonResponse(array $data);
}