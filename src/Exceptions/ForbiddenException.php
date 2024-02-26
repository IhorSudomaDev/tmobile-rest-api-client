<?php

namespace TMobileApiClient\Exceptions;

use Exception;

/**
 * Class ForbiddenException
 * @package TMobileApiClient\Exceptions
 */
class ForbiddenException extends Exception
{

	/*** @var string */
	protected $message = 'Forbidden (403)';

}