<?php

declare(strict_types = 1);

namespace backend\Controllers\API;

use backend\Core\App;
use Symfony\Component\HttpFoundation\Request;

interface ApiInterface {
	
	/**
	 * @param Request $request
	 * @param App $app
	 *
	 * @return string
	 */
	public function actionGet(Request $request, App $app): string;
	
	/**
	 * @param Request $request
	 * @param App $app
	 *
	 * @return string
	 */
	public function actionPost(Request $request, App $app): string;
	
	/**
	 * @param Request $request
	 * @param App $app
	 *
	 * @return string
	 */
	public function actionPut(Request $request, App $app): string;
	
	/**
	 * @param Request $request
	 * @param App $app
	 *
	 * @return string
	 */
	public function actionDelete(Request $request, App $app): string;
}