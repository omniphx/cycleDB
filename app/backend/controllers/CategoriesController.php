<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->category->with('subcategories')->get();
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
	 * @param  string $slug
	 * @return Response
	 */
	public function show($slug)
	{
		return $this->category
			->with(['components.manufacturer','components.subcategory'])
			->findSlug($slug);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{slug}/edit
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
	 * PUT /categories/{slug}
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
	 * DELETE /categories/{slug}
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		//
	}

}