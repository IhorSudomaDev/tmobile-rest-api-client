<?php

namespace TMobileApiClient\Models;

/**
 * Class TrafficType
 * @property string description
 * @property int    id
 * @property string unit
 * @package TMobileApiClient\Models
 */
class TrafficType
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

	/*** @return string */
	public function getUnit(): string
	{
		return $this->unit ?? '';
	}

}