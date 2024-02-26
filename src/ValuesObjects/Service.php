<?php

namespace TMobileApiClient\ValuesObjects;

/**
 * Class Service
 * @package TMobileApiClient\ValuesObjects
 */
class Service
{

	/*** @var string */
	public const DATA = 'data';
	/*** @var string */
	public const SMS_MO = 'smsMo';
	/*** @var string */
	public const SMS_MT = 'smsMt';

	/**
	 * @param $service
	 * @return bool
	 */
	public static function isValid($service): bool
	{
		return in_array($service, [self::DATA, self::SMS_MO, self::SMS_MT], TRUE);
	}

}