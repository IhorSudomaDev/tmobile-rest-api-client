<?php

namespace TMobileApiClient\Exceptions;

use Exception;

/**
 * Class PageNotFoundException
 * @package TMobileApiClient\Exceptions
 */
class PageNotFoundException extends Exception
{
	/*** @var string */
	protected $message = 'Page Not Found';
}