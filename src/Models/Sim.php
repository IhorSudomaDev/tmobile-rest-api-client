<?php

namespace TMobileApiClient\Models;

/**
 * Class Sim
 * @property string iccid
 * @property array  _links
 * @package TMobileApiClient\Models
 */
class Sim
{

	/*** @return string */
	public function getIccid(): string
	{
		return $this->iccid;
	}

	/*** @return array */
	public function getLinks(): array
	{
		return $this->_links;
	}

}