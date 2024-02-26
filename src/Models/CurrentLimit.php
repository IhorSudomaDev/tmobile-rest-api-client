<?php

namespace TMobileApiClient\Models;

/**
 * Class CurrentLimit
 * @property int    id
 * @property string limit
 * @property string unit
 * @package TMobileApiClient\Models
 */
class CurrentLimit
{

	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/*** @return string */
	public function getLimit(): string
	{
		return $this->limit ?? '';
	}

	/*** @return string */
	public function getUnit(): string
	{
		return $this->unit ?? '';
	}

}