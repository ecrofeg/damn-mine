<?php

namespace backend\Controllers;

use backend\Core\AbstractController;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class DamnController extends AbstractController {
	
	/**
	 * @param Request $request
	 * @param Application $app
	 *
	 * @return string
	 */
	public function actionIndex(Request $request, Application $app) : string {
		return $this->render($app, 'index.html');
	}
}