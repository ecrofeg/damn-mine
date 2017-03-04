<?php

declare(strict_types = 1);

namespace backend\Controllers\API;

use backend\API\Models\User;
use backend\Core\App;
use backend\Core\Requester;
use Symfony\Component\HttpFoundation\Request;

class UserController implements ApiInterface {
	
	/**
	 * @param Request $request
	 * @param App $app
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function actionGet(Request $request, App $app): string {
		$userId = $request->get('id');
		
		if (!$userId) {
			$userId = 'current';
		}
		
		$url = 'users/' . $userId . '.json';
		
		$http = new Requester();
		$response = $http->request('GET', $url);
		
		if (!isset($response['user'])) {
			$user = new User($response['user']);
		}
		else {
			throw new \Exception('Wrong response.');
		}
		
		return $app->json($user->toOutput())->getContent();
	}
	
	public function actionPost(Request $request, App $app): string {
		return '';
	}
	
	public function actionPut(Request $request, App $app): string {
		return '';
	}
	
	public function actionDelete(Request $request, App $app): string {
		return '';
	}
	
}