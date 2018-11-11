<?php

namespace App\Controllers;

/**
 * Home Controller
 */
class Home extends \Core\Controller
{
	/**
	 * Show the index page
	 *
	 * @return void
	 */
	public function index()
	{
		$this->view->render("Home/index.php");
	}

	/**
	 * Route for testing new component
	 * Contains all the component as I go about building newer component
	 * This may look trash (see component route for clean docs)
	 */
	public function test()
	{
		$this->view->render('Home/test.php');
	}
}
