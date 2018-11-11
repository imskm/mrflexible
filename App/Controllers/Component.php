<?php

namespace App\Controllers;

/**
 * Component controller
 */
class Component extends \Core\Controller
{
	public function index()
	{
		$this->view->render('Component/index.php');
	}
}