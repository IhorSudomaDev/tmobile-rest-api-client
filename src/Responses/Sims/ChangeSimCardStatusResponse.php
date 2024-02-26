<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\AResponse;

/**
 * Class ChangeSimCardStatusResponse
 * @package TMobileApiClient\Responses\Sims
 */
class ChangeSimCardStatusResponse extends AResponse
{

	/**
	 * @param $result
	 * @return bool
	 */
	public function get($result): bool
	{
		return empty($result);
	}

}