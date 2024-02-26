<?php

namespace TMobileApiClient\ValuesObjects;

/**
 * Class SmsParameters
 * @package TMobileApiClient\ValuesObjects
 */
class SmsParameters
{
	// ====== Types ======
	/** @var string[] */
	public const MT_TYPE = [
		'title' => 'MT',
		'id'    => '1',
	];

	/** @var string[] */
	public const MO_TYPE = [
		'title' => 'MO',
		'id'    => '2',
	];

	// ====== Statuses ======
	/** @var string[] */
	public const NOT_CONFIRMED = [
		'original' => 'NOT_CONFIRMED',
		'custom'   => 'not_confirmed',
	];

	/** @var string[] */
	public const DELIVERED = [
		'original' => 'DELIVERED',
		'custom'   => 'delivered',
	];

	/** @var string[] */
	public const DELIVERY_ATTEMPT_PENDING = [
		'original' => 'DELIVERY ATTEMPT PENDING',
		'custom'   => '',
	];
}