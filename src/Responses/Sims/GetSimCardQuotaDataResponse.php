<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetSimCardQuotaDataResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetSimCardQuotaDataResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::QUOTA;

}