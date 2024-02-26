<?php

namespace TMobileApiClient\Responses\_AbstractResponses;

/**
 * Class AResponse
 * @package TMobileApiClient\Responses
 */
abstract class AResponse
{

	/**
	 * @param $result
	 * @return mixed
	 */
	abstract public function get($result);

}