<?php

namespace TMobileApiClient\Models;

/**
 * Class SelectableLimits
 * @property string description
 * @property int    id
 * @package TMobileApiClient\Models
 */
class SelectableLimits
{

	/*** @return string */
	public function getDescription(): string
	{
		return $this->description ?? '';
	}

	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

}