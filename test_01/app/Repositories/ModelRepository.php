<?php

namespace App\Repositories;

/**
 * Class ModelRepository
 * @package App\Repositories
 */
class ModelRepository implements RepositoryInterface
{
	/** @var  string */
	protected $modelName;

	/**
	 * @param array $columns
	 *
	 * @return mixed
	 */
	public function all(array $columns = ['*'])
	{
		return $this->modelName::all($columns);
	}

	/**
	 * @param int   $perPage
	 * @param array $columns
	 *
	 * @return mixed
	 */
	public function paginate(int $perPage = 15, array $columns = ['*'])
	{
		return $this->modelName::paginate($perPage, $columns)->toArray();
	}
}