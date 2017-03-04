<?php

declare(strict_types = 1);

namespace backend\Core;

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class App extends Application {
	
	/**
	 * @var string
	 */
	protected $_apiKey = '';
	
	/**
	 * @param Request|null $request
	 */
	public function run(Request $request = null) {
		$this->register(new TwigServiceProvider(), array(
			'twig.path' => __DIR__ . '/../views',
		));
		
		$this['debug'] = true;
		
		parent::run($request);
		
//		$client = new \GuzzleHttp\Client([
//			'base_uri' => 'http://helpdesk.nemo.travel/'
//		]);
//		
//		$res = $client->request('GET', 'issues.json', [
//			'query' => [
//				'assigned_to_id' => 420
//			],
//			'headers' => [
//				'X-Redmine-API-Key' => '4feb780f9bddc9e5f637ca5b8a7e497357dfd2d7'
//			]
//		]);
		
		$this->loadApiKey();
	}
	
	/**
	 * @throws \Exception
	 */
	public function loadApiKey() {
		$config = static::getConfig();
		
		if (!isset($config->apiKey) || !$config->apiKey) {
			throw new \Exception('Wrong API key.');
		}
		
		$this->setApiKey((string)$config->apiKey);
	}
	
	/**
	 * @return string
	 */
	public function getApiKey(): string {
		return $this->_apiKey;
	}
	
	/**
	 * @param string $apiKey
	 */
	public function setApiKey(string $apiKey) {
		$this->_apiKey = $apiKey;
	}
	
	/**
	 * @return \stdClass
	 * @throws \Exception
	 */
	public static function getConfig(): \stdClass {
		$configPath = realpath('../config.json');
		$result = null;
		
		if (file_exists($configPath)) {
			$result = json_decode(file_get_contents($configPath));
		}
		else {
			throw new \Exception('Wrong config.json file.');
		}
		
		return $result;
	}
}