<?php

namespace TMobileApiClient\Models;

/**
 * Class SetLimitsRequest
 * @property int dataLimitId
 * @property int smsMtLimitId
 * @property int smsMoLimitId
 * @package TMobileApiClient\Models
 */
class SetLimitsRequest
{

	/*** @return int */
	public function getDataLimitId(): int
	{
		return $this->dataLimitId;
	}

	/*** @return int */
	public function getSmsMtLimitId(): int
	{
		return $this->smsMtLimitId;
	}

	/*** @return int */
	public function getSmsMoLimitId(): int
	{
		return $this->smsMoLimitId;
	}

}