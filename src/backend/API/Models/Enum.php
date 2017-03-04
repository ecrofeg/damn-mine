<?php

declare(strict_types = 1);

namespace backend\API\Models;

use backend\Core\AbstractModel;

class Enum extends AbstractModel {
	
	/**
	 * @var int
	 */
	protected $_id;
	
	/**
	 * @var string
	 */
	protected $_name;
	
	/**
	 * @var bool
	 */
	protected $_isDefault = false;
	
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
	
	/**
	 * @return bool
	 */
	public function isDefault(): bool {
		return $this->_isDefault;
	}
	
	/**
	 * @param bool $isDefault
	 */
	public function setIsDefault(bool $isDefault) {
		$this->_isDefault = $isDefault;
	}
}