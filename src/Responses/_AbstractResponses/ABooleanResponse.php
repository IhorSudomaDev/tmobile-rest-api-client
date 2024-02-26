<?php

namespace TMobileApiClient\Responses\_AbstractResponses;

/**
 * Class ABooleanResponse
 * @package TMobileApiClient\Responses\_AbstractResponses
 */
class ABooleanResponse extends AResponse
{

	/**
	 * @param $result
	 * @return mixed
	 */
	public function get($result)
	{
		return $result;
	}
}