<?php

namespace backend\Core;

use Silex\Application;

abstract class AbstractController {
	/**
	 * @param Application $app
	 * @param string $templateName
	 * @param array $vars
	 *
	 * @return string
	 */
	public function render(Application $app, string $templateName, array $vars = []) : string {
		return $app['twig']->render($templateName, $vars);
	}
}