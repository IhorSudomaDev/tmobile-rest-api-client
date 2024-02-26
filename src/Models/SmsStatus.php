<?php

namespace TMobileApiClient\Models;

/**
 * Class SmsStatus
 * @property int    id
 * @property string description
 * @package TMobileApiClient\Models
 */
class SmsStatus
{

	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/*** @return string */
	public function getDescription(): string
	{
		return $this->description ?? '';
	}

}