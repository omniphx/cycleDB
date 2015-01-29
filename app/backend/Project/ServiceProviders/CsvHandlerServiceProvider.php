<?php namespace Project\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class CsvHandlerServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'csvhandler',
            'Project\Handlers\CsvHandler'
        );
    }

}