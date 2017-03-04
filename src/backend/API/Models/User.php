<?php

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
	 * @var array
	 */
	public static $map = [
		'id'            => '_id',
		'login'         => '_login',
		'firstname'     => '_firstName',
		'lastname'      => '_lastName',
		'mail'          => '_email',
		'created_on'    => '_registerDate',
		'last_login_on' => '_lastLoginDate',
	];
	
	/**
	 * User constructor.
	 *
	 * @param array $data
	 */
	public function __construct(array $data) {
		$this->parse($data);
	}
	
	/**
	 * @param array $data
	 */
	public function parse(array $data) {
		foreach ($data as $fieldName => $field) {
			if (isset(static::$map[$fieldName])) {
				$classFieldName = static::$map[$fieldName];
				
				switch ($classFieldName) {
					case '_registerDate':
					case '_lastLoginDate':
						$value = Date::createFromFormat('Y-m-d\TH:i:sO', $field);
						break;
						
					default:
						$value = $field;
						break;
				}
				
				$this->{$classFieldName} = $value;
			}
		}
	}
	
	/**
	 * @return array
	 */
	public function toOutput() {
		return [
			'id' => $this->getId(),
			'firstName' => $this->getFirstName(),
			'lastName' => $this->getLastName(),
			'email' => $this->getEmail(),
		];
	}
	
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