<?php

class ManufacturersController extends \BaseController {

	/**
	 * Manufacturer Model
	 * @var Manufacturer
	 */
	protected $manufacturer;

	/**
	 * Inject the models
	 * @param Manufacturer $manufacturer
	 * @param Type $type
	 */
	public function __construct(Manufacturer $manufacturer)
	{
		$this->manufacturer = $manufacturer;
	}

	/**
	 * Display a listing of the resource.
	 * GET /manufacturers
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->manufacturer->get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /manufacturers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /manufacturers
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /manufacturers/{slug}
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		return $this->manufacturer
			->with(['products.manufacturer','products.subcategory'])
			->findSlug($slug);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /manufacturers/{slug}/edit
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function edit($slug)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /manufacturers/{slug}
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function update($slug)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /manufacturers/{slug}
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		//
	}

}