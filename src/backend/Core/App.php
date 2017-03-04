<?php

namespace backend\Core;

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class App extends Application {
	
	/**
	 * @param Request|null $request
	 */
	public function run(Request $request = null) {
		$this->register(new TwigServiceProvider(), array(
			'twig.path' => __DIR__ . '/../views',
		));
		
		$this['debug'] = true;
		
		parent::run($request);
	}
}