<?php

namespace TMobileApiClient\Models;

/**
 * Class CellGlobalId
 * @property int    cid
 * @property int    lac
 * @property string mcc
 * @property string mnc
 * @package TMobileApiClient\Models
 */
class CellGlobalId
{
	/*** @return int */
	public function getCid(): int
	{
		return $this->cid;
	}

	/*** @return int */
	public function getLac(): int
	{
		return $this->lac;
	}

	/*** @return string */
	public function getMcc(): string
	{
		return $this->mcc ?? '';
	}

	/*** @return string */
	public function getMnc(): string
	{
		return $this->mnc ?? '';
	}

}