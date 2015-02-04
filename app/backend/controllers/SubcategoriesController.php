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
		return $this->subcategory->get();
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
		return $this->subcategory
			->with(['components.manufacturer','components.subcategory'])
			->findSlug($slug);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /subcategories/{slug}/edit
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function edit($slug)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /subcategories/{slug}
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function update($slug)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /subcategories/{slug}
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		//
	}

}