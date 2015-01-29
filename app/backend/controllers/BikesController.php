<?php

class BikesController extends \BaseController {

	/**
	 * Bike Model
	 * @var Bike
	 */
	protected $bike;

	/**
	 * Inject the models
	 * @param Bike $bike
	 */
	public function __construct(Bike $bike)
	{
		$this->bike = $bike;
	}

	/**
	 * Display a listing of the resource.
	 * GET /bikes
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->bike->with('manufacturer','subcategory')->get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /bikes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /bikes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /bikes/{slug}
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
	 * GET /bikes/{slug}/edit
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
	 * PUT /bikes/{slug}
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
	 * DELETE /bikes/{slug}
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		//
	}

}