<?php

namespace App\Services;

use Illuminate\Foundation\Application;
use App\Contracts\JsonResponseContract;


/**
 * Class JsonResponseService
 * @package App\Services
 */
class JsonResponseService implements JsonResponseContract
{
	/** @var Application */
	protected $app;

	/**
	 * JsonResponseService constructor.
	 *
	 * @param Application $app
	 */
	public function __construct(Application $app)
	{
		$this->app = $app;
	}

	/**
	 * @param array $data
	 *
	 * @return mixed
	 */
	public function getJsonResponse(array $data)
	{
		return response()->json($this->dataMapping($data));
	}

	/**
	 * @param array $rawData
	 *
	 * @return array
	 */
	protected function dataMapping(array $rawData): array
	{
		return [
			"meta"  => [
				"total_pages"  => $rawData["last_page"],
				"per_page"     => $rawData["per_page"],
				"current_page" => $rawData["current_page"],
				"total"        => $rawData["total"],
			],
			"data"  => $rawData["data"],
			"links" => [
				"self"  => $rawData["path"],
				"first" => $rawData["first_page_url"],
				"prev"  => $rawData["prev_page_url"],
				"next"  => $rawData["next_page_url"],
				"last"  => $rawData["last_page_url"],
			],
		];
	}
}