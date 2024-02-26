<?php

namespace TMobileApiClient\Models;

/**
 * Class SourceAddressType
 * @property int    id
 * @property string description
 * @package TMobileApiClient\Models
 */
class SourceAddressType
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