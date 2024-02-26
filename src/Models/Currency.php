<?php

namespace TMobileApiClient\Models;

/**
 * Class Currency
 * @property string code
 * @property string symbol
 * @property int    id
 * @package TMobileApiClient\Models
 */
class Currency
{
	/*** @return string */
	public function getCode(): string
	{
		return $this->code ?? '';
	}

	/*** @return string */
	public function getSymbol(): string
	{
		return $this->symbol ?? '';
	}

	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

}