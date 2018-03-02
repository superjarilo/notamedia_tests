<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
	/**
	 * Number of generated customers
	 */
	const CUSTOMER_COUNT = 1000;

	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Customer::class, self::CUSTOMER_COUNT)->create();
    }
}
