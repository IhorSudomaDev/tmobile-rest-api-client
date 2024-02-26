<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\AResponse;

/**
 * Class ChangeSimCardLabelResponse
 * @package TMobileApiClient\Responses\Sims
 */
class ChangeSimCardLabelResponse extends AResponse
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