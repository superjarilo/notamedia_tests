<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomerTest extends TestCase
{
	/**
	 * A cuslomer's list test.
	 *
	 * @return void
	 */
	public function testCustomer()
	{
		$response = $this->get('/customer');

		$response->assertStatus(200);
		$response->assertJsonStructure(
			[
				"meta"  => [
					"total_pages",
					"per_page",
					"current_page",
					"total",
				],
				"data"  => [
					[
						"id",
						"name",
						"surname",
						"date_of_birth",
						"notes",
						"created_at",
						"updated_at",
					],
				],
				"links" => [
					"self",
					"first",
					"prev",
					"next",
					"last",
				],
			]
		);
		$this->assertEquals(20, count($response->original["data"]));
	}

	/**
	 * A pagination of list of customers test.
	 *
	 * @return void
	 */
	public function testCustomerPagination()
	{
		$response = $this->get('/customer?page=2');

		$response->assertStatus(200);
		$response->assertJsonStructure(
			[
				"meta"  => [
					"total_pages",
					"per_page",
					"current_page",
					"total",
				],
				"data"  => [
					[
						"id",
						"name",
						"surname",
						"date_of_birth",
						"notes",
						"created_at",
						"updated_at",
					],
				],
				"links" => [
					"self",
					"first",
					"prev",
					"next",
					"last",
				],
			]
		);
		$this->assertEquals(20, count($response->original["data"]));
		$this->assertEquals(2, $response->original["meta"]["current_page"]);
	}
}
