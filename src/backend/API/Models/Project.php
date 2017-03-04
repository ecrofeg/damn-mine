<?php

declare(strict_types = 1);

namespace backend\API\Models;

use backend\Core\AbstractModel;

class Project extends AbstractModel {
	
	/** 
	 * @var int 
	 */
	protected $_id;
	
	/**
	 * @var string 
	 */
	protected $_name;
	
	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->_id;
	}
	
	/**
	 * @param int $id
	 */
	public function setId(int $id) {
		$this->_id = $id;
	}
	
	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->_name;
	}
	
	/**
	 * @param string $name
	 */
	public function setName(string $name) {
		$this->_name = $name;
	}
}