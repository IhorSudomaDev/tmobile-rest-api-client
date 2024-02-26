<?php

namespace TMobileApiClient\Models;

/**
 * Class Daily
 * @property Data   data
 * @property string date
 * @property Data   sms
 * @package TMobileApiClient\Models
 */
class Daily
{

	/*** @return Data */
	public function getData(): Data
	{
		return $this->data;
	}

	/*** @return string */
	public function getDate(): string
	{
		return $this->date ?? '';
	}

	/*** @return Data */
	public function getSms(): Data
	{
		return $this->sms;
	}

}