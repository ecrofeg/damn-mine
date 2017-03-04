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
}