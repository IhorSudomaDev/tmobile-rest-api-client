<?php

namespace TMobileApiClient\Models;

/**
 * Class Link
 * @property string rel
 * @property string href
 * @package TMobileApiClient\Models
 */
class Link
{
	/*** @return string */
	public function getRel(): string
	{
		return $this->rel ?? '';
	}

	/*** @return string */
	public function getHref(): string
	{
		return $this->href ?? '';
	}

}