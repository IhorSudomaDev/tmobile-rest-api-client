<?php

namespace TMobileApiClient\Authorization;

use Carbon\Carbon;

/**
 * Class AuthToken
 * @package TMobileApiClient\Authorization
 */
class AuthToken
{

	/*** @var string|NULL */
	private ?string $token;

	/*** @var Carbon|NULL */
	private ?Carbon $expiredAt;

	/**
	 * @param ?string $token
	 * @param ?Carbon $expiredAt
	 */
	public function __construct(?string $token, ?Carbon $expiredAt)
	{
		$this->token     = $token;
		$this->expiredAt = $expiredAt;
	}

	/*** @return string|NULL */
	public function getToken(): ?string
	{
		return $this->token;
	}

	/*** @return Carbon|NULL */
	public function getExpiredAt(): ?Carbon
	{
		return $this->expiredAt;
	}

	/*** @return bool */
	public function isValid(): bool
	{
		$expiredAt = $this->getExpiredAt();
		return ! empty($this->getToken()) && $expiredAt !== NULL && $expiredAt->setTimezone('UTC')->getTimestamp() - 300 > Carbon::now('UTC')->getTimestamp();
	}

}