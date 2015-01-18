<?php

use Blog\Newsletters\NewsletterList;

class HomeController extends BaseController {

    /**
     * Category Model
     * @var Category
     */
    protected $category;

    /**
     * Inject the models
     * @param Category $category
     * @param Type $type
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

	public function index()
	{
        $categories = $this->category->paginate(10);

        return View::make('home.index', compact('categories'));
	}

}
