<?php

class PostsController extends \BaseController {

	/**
	 * Post Model
	 * @var Post
	 */
	protected $post;

	/**
	 * Inject the models
	 * @param Post $post
	 * @param Type $type
	 */
	public function __construct(Post $post)
	{
		$this->post = $post;
	}
	
	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Request::get('q');

		$posts = $query
			? $this->post->published()->search($query)->orderBy('published_at', 'DESC')->paginate(10)
			: $this->post->published()->orderBy('published_at', 'DESC')->paginate(10);

		return View::make('posts.index', compact('posts','query'));

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
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
	 * PUT /posts/{id}
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
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}