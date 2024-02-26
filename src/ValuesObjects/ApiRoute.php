<?php

namespace TMobileApiClient\ValuesObjects;

use RuntimeException;

/**
 * Class ApiRoutes
 * @package TMobileApiClient\ValuesObjects
 */
class ApiRoute
{

	/*** @var string */
	public const BASE = 'https://api-easyconnect.iot.t-mobile.nl/management-api/oauth/token';
	/*** @var string */
	public const ORDERS = 'orders';
	/*** @var string */
	public const ORDER = 'order';
	/*** @var string */
	public const PRODUCTS = 'products';
	/*** @var string */
	public const SIM_CARDS = 'simCards';
	/*** @var string */
	public const SIM_CARD = 'simCard';
	/*** @var string */
	public const SIM_CARD_CONNECTIVITY_INFO = 'simCardConnectivityInfo';
	/*** @var string */
	public const SIM_CARD_EVENTS = 'simCardEvents';
	/*** @var string */
	public const SIM_CARD_QUOTA_DATA = 'simCardQuotaData';
	/*** @var string */
	public const SIM_CARD_QUOTA_SMS = 'simCardQuotaSms';
	/*** @var string */
	public const SIM_CARD_SMS = 'simCardSmsList';
	/*** @var string */
	public const SIM_CARD_SMS_DETAILS = 'simCardSms';
	/*** @var string */
	public const SIM_CARD_USAGE = 'simCardUsage';
	/*** @var string */
	public const SERVICE_LIMITS = 'serviceLimits';
	/*** @var string */
	public const MONTHLY_LIMITS = 'monthlyLimits';
	/*** @var string */
	public const SIM_CARD_TOPUP = 'simCardTopup';
	/*** @var string */
	public const SIM_CARD_RESET = 'simCardReset';

	/*** @var string */
	protected const BASE_URL = 'https://api-easyconnect.iot.t-mobile.nl/management-api/v1/';

	/*** @var array */
	private const URL_PREFIX = [
		self::ORDERS                     => 'orders',
		self::PRODUCTS                   => 'products',
		self::SIM_CARDS                  => 'sims',
		self::ORDER                      => 'orders/%s',
		self::SIM_CARD                   => 'sims/%s',
		self::SIM_CARD_CONNECTIVITY_INFO => 'sims/%s/connectivity_info',
		self::SIM_CARD_EVENTS            => 'sims/%s/events',
		self::SIM_CARD_QUOTA_DATA        => 'sims/%s/quota/data',
		self::SIM_CARD_QUOTA_SMS         => 'sims/%s/quota/sms',
		self::SIM_CARD_SMS               => 'sims/%s/sms',
		self::SIM_CARD_SMS_DETAILS       => 'sims/%s/sms/%s',
		self::SIM_CARD_USAGE             => 'sims/%s/usage',
		self::SERVICE_LIMITS             => 'sims/%s/limits',
		self::MONTHLY_LIMITS             => 'sims/limits',
		self::SIM_CARD_TOPUP             => 'sims/%s/topup',
		self::SIM_CARD_RESET             => 'sims/%s/reset',
	];

	/**
	 * @param string $prefix
	 * @return string
	 */
	public static function getFor(string $prefix): string
	{
		if (isset(self::URL_PREFIX[$prefix])) {
			return sprintf('%s%s', self::BASE_URL, self::URL_PREFIX[$prefix] ?? '');
		}
		throw new RuntimeException('Prefix is incorrect');
	}

}