<?php

namespace TMobileApiClient\Models;

/**
 * Class Status
 * @property int    id
 * @property string description
 * @package TMobileApiClient\Models
 */
class Status
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