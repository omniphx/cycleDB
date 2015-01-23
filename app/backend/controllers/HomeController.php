<?php

use Blog\Newsletters\NewsletterList;

class HomeController extends BaseController {

	public function index()
	{
        $categories = $this->category->get();

        return View::make('home.index', compact('categories'));
	}

}
