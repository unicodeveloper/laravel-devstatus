<?php

namespace Unicodeveloper\DevStatus;

use Illuminate\Support\ServiceProvider;

class DevStatusServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//Publishes package config file to applications config folder
		$this->publishes([__DIR__.'/config/DevStatus.php' => config_path('DevStatus.php')]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//Register Our Package routes
		include __DIR__.'/routes.php';

		// Let Laravel Ioc Container know about our Controller
		$this->app->make('Busayo\DevStatus\DevStatusController');
	}

}
