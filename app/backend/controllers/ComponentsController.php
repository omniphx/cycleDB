<?php

class ComponentsController extends \BaseController {

	/**
	 * Component Model
	 * @var Component
	 */
	protected $component;

	/**
	 * Inject the models
	 * @param Component $component
	 */
	public function __construct(Component $component)
	{
		$this->component = $component;
	}

	/**
	 * Display a listing of the resource.
	 * GET /components
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->component->with('manufacturer','subcategory')->get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /components/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /components
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /components/{slug}
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function show($slug)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /components/{slug}/edit
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
	 * PUT /components/{slug}
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
	 * DELETE /components/{slug}
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		//
	}

}