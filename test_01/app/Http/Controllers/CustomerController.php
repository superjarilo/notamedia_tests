<?php

namespace App\Http\Controllers;

use App\Contracts\RepositoryContract;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Customer;

/**
 * Class ClientController
 * @package App\Http\Controllers
 */
class CustomerController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

	/**
	 * Number of records which are output per page
	 *
	 * @var int
	 */
	const PER_PAGE = 20;

	/** @var  \App\Repositories\ModelRepository */
	protected $repository;

	/** @var \App\Services\JsonResponseService */
	protected $jsonResponse;

	public function __construct()
	{
		$this->repository = resolve('RepositoryContract')->repository('\App\Models\Customer');
		$this->jsonResponse = resolve('JsonResponseContract');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return string
	 */
    public function index()
	{
		$customers = $this->repository->paginate(static::PER_PAGE);

		return $this->jsonResponse->getJsonResponse($customers);
	}
}
