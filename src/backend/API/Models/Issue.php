<?php

declare(strict_types = 1);

namespace backend\API\Models;

use backend\Core\AbstractModel;
use backend\Core\Date;
use backend\API\Models\Enum\Priority;

class Issue extends AbstractModel {
	
	/**
	 * @var int
	 */
	protected $_id;
	
	/**
	 * @var Project
	 */
	protected $_project;
	
	/**
	 * @var Type
	 */
	protected $_type;
	
	/**
	 * @var Status
	 */
	protected $_status;
	
	/**
	 * @var Priority
	 */
	protected $_priority;
	
	/**
	 * @var User
	 */
	protected $_author;
	
	/**
	 * @var User
	 */
	protected $_assignee;
	
	/**
	 * @var string
	 */
	protected $_title;
	
	/**
	 * @var string
	 */
	protected $_description;
	
	/**
	 * @var Date
	 */
	protected $_startDate;
	
	/**
	 * @var float
	 */
	protected $_donePercentage;
	
	/**
	 * @var float
	 */
	protected $_spentHours;
	
	/**
	 * @var array
	 */
	protected $_customFields;
	
	/**
	 * @var Date
	 */
	protected $_createdDate;
	
	/**
	 * @var Date
	 */
	protected $_updatedDate;
	
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
	 * @return Project
	 */
	public function getProject(): Project {
		return $this->_project;
	}
	
	/**
	 * @param Project $project
	 */
	public function setProject(Project $project) {
		$this->_project = $project;
	}
	
	/**
	 * @return Type
	 */
	public function getType(): Type {
		return $this->_type;
	}
	
	/**
	 * @param Type $type
	 */
	public function setType(Type $type) {
		$this->_type = $type;
	}
	
	/**
	 * @return Status
	 */
	public function getStatus(): Status {
		return $this->_status;
	}
	
	/**
	 * @param Status $status
	 */
	public function setStatus(Status $status) {
		$this->_status = $status;
	}
	
	/**
	 * @return Priority
	 */
	public function getPriority(): Priority {
		return $this->_priority;
	}
	
	/**
	 * @param Priority $priority
	 */
	public function setPriority(Priority $priority) {
		$this->_priority = $priority;
	}
	
	/**
	 * @return User
	 */
	public function getAuthor(): User {
		return $this->_author;
	}
	
	/**
	 * @param User $author
	 */
	public function setAuthor(User $author) {
		$this->_author = $author;
	}
	
	/**
	 * @return User
	 */
	public function getAssignee(): User {
		return $this->_assignee;
	}
	
	/**
	 * @param User $assignee
	 */
	public function setAssignee(User $assignee) {
		$this->_assignee = $assignee;
	}
	
	/**
	 * @return string
	 */
	public function getTitle(): string {
		return $this->_title;
	}
	
	/**
	 * @param string $title
	 */
	public function setTitle(string $title) {
		$this->_title = $title;
	}
	
	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->_description;
	}
	
	/**
	 * @param string $description
	 */
	public function setDescription(string $description) {
		$this->_description = $description;
	}
	
	/**
	 * @return Date
	 */
	public function getStartDate(): Date {
		return $this->_startDate;
	}
	
	/**
	 * @param Date $startDate
	 */
	public function setStartDate(Date $startDate) {
		$this->_startDate = $startDate;
	}
	
	/**
	 * @return float
	 */
	public function getDonePercentage(): float {
		return $this->_donePercentage;
	}
	
	/**
	 * @param float $donePercentage
	 */
	public function setDonePercentage(float $donePercentage) {
		$this->_donePercentage = $donePercentage;
	}
	
	/**
	 * @return float
	 */
	public function getSpentHours(): float {
		return $this->_spentHours;
	}
	
	/**
	 * @param float $spentHours
	 */
	public function setSpentHours(float $spentHours) {
		$this->_spentHours = $spentHours;
	}
	
	/**
	 * @return array
	 */
	public function getCustomFields(): array {
		return $this->_customFields;
	}
	
	/**
	 * @param array $customFields
	 */
	public function setCustomFields(array $customFields) {
		$this->_customFields = $customFields;
	}
	
	/**
	 * @return Date
	 */
	public function getCreatedDate(): Date {
		return $this->_createdDate;
	}
	
	/**
	 * @param Date $createdDate
	 */
	public function setCreatedDate(Date $createdDate) {
		$this->_createdDate = $createdDate;
	}
	
	/**
	 * @return Date
	 */
	public function getUpdatedDate(): Date {
		return $this->_updatedDate;
	}
	
	/**
	 * @param Date $updatedDate
	 */
	public function setUpdatedDate(Date $updatedDate) {
		$this->_updatedDate = $updatedDate;
	}
}