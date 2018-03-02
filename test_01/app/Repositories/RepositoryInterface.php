<?php
/**
 * Created by PhpStorm.
 * User: superjarilo
 * Date: 01.03.18
 * Time: 11:20
 */

namespace App\Repositories;


/**
 * Interface RepositoryInterface
 * @package App\Repositories
 */
interface RepositoryInterface
{
	public function all(array $columns = ['*']);

	public function paginate(int $perPage = 15, array $columns = ['*']);
}