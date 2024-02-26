<?php

namespace TMobileApiClient\Models;

/**
 * Class Charge
 * @property string name
 * @property int    amount_net
 * @property string currency
 * @package TMobileApiClient\Models
 */
class Charge
{
	/*** @return string */
	public function getName(): string
	{
		return $this->name ?? '';
	}

	/*** @return int */
	public function getAmountNet(): int
	{
		return $this->amount_net;
	}

	/*** @return string */
	public function getCurrency(): string
	{
		return $this->currency ?? '';
	}

}