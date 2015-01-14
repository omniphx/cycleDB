<?php

class CategoriesController extends \BaseController {

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

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = $this->category->paginate(10);

		return View::make('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /categories/{slug}
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$category = $this->category->findSlug($slug);
		$products = $category->products()->paginate(10);

		return View::make('categories.show', compact('category','products'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}