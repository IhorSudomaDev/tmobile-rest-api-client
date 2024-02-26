<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetSimCardConnectivityInfoResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetSimCardConnectivityInfoResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::CONNECTIVITY_INFO;

}