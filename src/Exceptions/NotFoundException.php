<?php

namespace TMobileApiClient\Exceptions;

use Exception;

/**
 * Class NotFoundException
 * @package TMobileApiClient\Exceptions
 */
class NotFoundException extends Exception
{

	/*** @param string $model */
	public function __construct(string $model)
	{
		parent::__construct('Not Found (' . $model . ')');
	}
}