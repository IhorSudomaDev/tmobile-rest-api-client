<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetSimCardUsageResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetSimCardUsageResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::USAGE;

}