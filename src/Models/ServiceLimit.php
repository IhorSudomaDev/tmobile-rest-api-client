<?php

namespace TMobileApiClient\Models;

/**
 * Class ServiceLimit
 * @property CurrentLimit     data
 * @property CurrentLimit     smsMt
 * @property CurrentLimit     smsMo
 * @property SelectableLimits selectableLimits
 * @package TMobileApiClient\Models
 */
class ServiceLimit
{

	/*** @return CurrentLimit */
	public function getData(): CurrentLimit
	{
		return $this->data;
	}

	/*** @return CurrentLimit */
	public function getSmsMt(): CurrentLimit
	{
		return $this->smsMt;
	}

	/*** @return CurrentLimit */
	public function getSmsMo(): CurrentLimit
	{
		return $this->smsMo;
	}

	/*** @return SelectableLimits */
	public function getSelectableLimits(): SelectableLimits
	{
		return $this->selectableLimits;
	}

}