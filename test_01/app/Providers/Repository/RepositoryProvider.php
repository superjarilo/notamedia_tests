<?php

namespace App\Providers\Repository;

use App\Services\RepositoryService;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
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
		$this->app->bind('RepositoryContract', function ($app) {
			return new RepositoryService($app);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['RepositoryContract'];
	}
}