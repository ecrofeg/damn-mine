<?php

declare(strict_types = 1);

namespace backend\Core;

abstract class AbstractModel {
	
	/**
	 * @param array $data
	 */
	abstract public function parse(array $data);
	
	/**
	 * @return array
	 */
	abstract public function toOutput();
}