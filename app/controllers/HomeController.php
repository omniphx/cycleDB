<?php

use Blog\Newsletters\NewsletterList;

class HomeController extends BaseController {

	/**
	 * Inject the models.
	 */
	public function __construct() {

	}

	public function index()
	{
		return View::make('home.index');
	}

}
