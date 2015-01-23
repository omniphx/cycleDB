<?php

class BaseController extends Controller {

    /**
     * Category Model
     * @var Category
     */
    protected $category;

    /**
     * Initializer.
     *
     * @access   public
     * @return \BaseController
     */
    public function __construct(Category $category)
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->category = $category;
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
