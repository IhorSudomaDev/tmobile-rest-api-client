<?php

namespace TMobileApiClient\Models;

/**
 * Class Usage
 * @property array|Daily[] stats
 * @package TMobileApiClient\Models
 */
class Usage
{

	/*** @return array|Daily[] */
	public function getStats(): array
	{
		return $this->stats;
	}

}