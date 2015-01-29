<?php namespace Project\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Events\Dispatcher
 */
class CsvHandler extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'csvhandler'; }

}