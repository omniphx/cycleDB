<?php

class SubcategoriesController extends \BaseController {

	/**
	 * Subcategory Model
	 * @var Subcategory
	 */
	protected $subcategory;

	/**
	 * Inject the models
	 * @param Subcategory $subcategory
	 */
	public function __construct(Subcategory $subcategory)
	{
		$this->subcategory = $subcategory;
	}

	/**
	 * Display a listing of the resource.
	 * GET /subcategories
	 *
	 * @return Response
	 */
	public function index()
	{
		$subcategories = $this->subcategory->paginate(10);

		return View::make('subcategories.index', compact('subcategories'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /subcategories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /subcategories
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /subcategories/{slug}
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$subcategory = $this->subcategory->findSlug($slug);
		$products = $subcategory->products()->paginate(10);

		return View::make('subcategories.show', compact('subcategory','products'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /subcategories/{id}/edit
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
	 * PUT /subcategories/{id}
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
	 * DELETE /subcategories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}