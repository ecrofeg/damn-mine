<?php

declare(strict_types = 1);

namespace backend\Core;

use GuzzleHttp\Client;

class Requester extends Client {
	/**
	 * Requester constructor.
	 *
	 * @param array $config
	 */
	public function __construct(array $config = []) {
		$config['base_uri'] = 'http://helpdesk.nemo.travel/';
		
		parent::__construct($config);
	}
	
	/**
	 * @param string $method
	 * @param string $uri
	 * @param array $options
	 *
	 * @return array
	 */
	public function request($method, $uri = '', array $options = []) {
		$options['headers'] = [
			'X-Redmine-API-Key' => '4feb780f9bddc9e5f637ca5b8a7e497357dfd2d7'
		];
		
		$response = parent::request($method, $uri, $options);
		
		return json_decode($response->getBody()->getContents(), true);
	}
}