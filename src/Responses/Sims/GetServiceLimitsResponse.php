<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetServiceLimitsResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetServiceLimitsResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::SERVICE_LIMIT;

}