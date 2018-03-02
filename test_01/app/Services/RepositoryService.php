<?php

namespace App\Services;

use App\Contracts\RepositoryContract;
use App\Repositories\CustomerRepository;
use Illuminate\Foundation\Application;


/**
 * Class RepositoryService
 * @package App\Services
 */
class RepositoryService implements RepositoryContract
{
	/** @var Application */
	protected $app;

	/**
	 * RepositoryService constructor.
	 *
	 * @param Application $app
	 */
	public function __construct(Application $app)
	{
		$this->app = $app;
	}

	/**
	 * @param string $modelName
	 *
	 * @return mixed
	 */
	public function repository(string $modelName)
	{
		$repositoryName = "\App\Repositories\\" . substr($modelName, strrpos($modelName, '\\') + 1) . "Repository";

		return new $repositoryName();
	}
}