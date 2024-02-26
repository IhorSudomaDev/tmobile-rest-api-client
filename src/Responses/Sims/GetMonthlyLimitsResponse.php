<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetMonthlyLimitsResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetMonthlyLimitsResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::SERVICE_LIMIT;

}