<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetSimCardSmsDetailsResponse
 * @package TMobileApiClient\Requests\Sims
 */
class GetSimCardSmsDetailsResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::SMS_DATA;

}