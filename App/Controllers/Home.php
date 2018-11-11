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
}
