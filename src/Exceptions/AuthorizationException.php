<?php

namespace TMobileApiClient\Exceptions;

use Exception;

/**
 * Class AuthorizationException
 * @package TMobileApiClient\Exceptions
 */
class AuthorizationException extends Exception
{

	/*** @var string */
	protected $message = 'Authorization was failed';

}