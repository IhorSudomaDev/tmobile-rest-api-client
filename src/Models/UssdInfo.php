<?php

namespace TMobileApiClient\Models;

/**
 * Class UssdInfo
 * @property bool   success
 * @property string error
 * @package TMobileApiClient\Models
 */
class UssdInfo
{

	/*** @return bool */
	public function isSuccess(): bool
	{
		return $this->success;
	}

	/*** @return string */
	public function getError(): string
	{
		return $this->error ?? '';
	}

}