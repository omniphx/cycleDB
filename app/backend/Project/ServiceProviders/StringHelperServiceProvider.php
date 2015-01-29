<?php namespace Project\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class StringHelperServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'stringhelper',
			'Project\Helpers\StringHelper'
		);
	}

}