<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetSimCardQuotaSmsResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetSimCardQuotaSmsResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::QUOTA;

}