<?php

namespace App\Providers\Json;

use App\Services\JsonResponseService;
use Illuminate\Support\ServiceProvider;

class JsonResponseProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('JsonResponseContract', function ($app) {
			return new JsonResponseService($app);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['JsonResponseContract'];
	}
}