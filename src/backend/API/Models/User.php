<?php

declare(strict_types = 1);

namespace backend\API\Models;

use backend\Core\AbstractModel;
use backend\Core\Date;

class User extends AbstractModel {
	
	/**
	 * @var int
	 */
	protected $_id;
	
	/**
	 * @var string
	 */
	protected $_login;
	
	/**
	 * @var string
	 */
	protected $_firstName;
	
	/**
	 * @var string
	 */
	protected $_lastName;
	
	/**
	 * @var string
	 */
	protected $_email;
	
	/**
	 * @var \backend\Core\Date
	 */
	protected $_registerDate;
	
	/**
	 * @var \backend\Core\Date
	 */
	protected $_lastLoginDate;
	
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
	public function getLogin(): string {
		return $this->_login;
	}
	
	/**
	 * @param string $login
	 */
	public function setLogin(string $login) {
		$this->_login = $login;
	}
	
	/**
	 * @return string
	 */
	public function getFirstName(): string {
		return $this->_firstName;
	}
	
	/**
	 * @param string $firstName
	 */
	public function setFirstName(string $firstName) {
		$this->_firstName = $firstName;
	}
	
	/**
	 * @return string
	 */
	public function getLastName(): string {
		return $this->_lastName;
	}
	
	/**
	 * @param string $lastName
	 */
	public function setLastName(string $lastName) {
		$this->_lastName = $lastName;
	}
	
	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->_email;
	}
	
	/**
	 * @param string $email
	 */
	public function setEmail(string $email) {
		$this->_email = $email;
	}
	
	/**
	 * @return Date
	 */
	public function getRegisterDate(): Date {
		return $this->_registerDate;
	}
	
	/**
	 * @param Date $registerDate
	 */
	public function setRegisterDate(Date $registerDate) {
		$this->_registerDate = $registerDate;
	}
	
	/**
	 * @return Date
	 */
	public function getLastLoginDate(): Date {
		return $this->_lastLoginDate;
	}
	
	/**
	 * @param Date $lastLoginDate
	 */
	public function setLastLoginDate(Date $lastLoginDate) {
		$this->_lastLoginDate = $lastLoginDate;
	}
}