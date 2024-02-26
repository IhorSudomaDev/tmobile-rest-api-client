<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetSimCardEventsResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetSimCardEventsResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::EVENT_COLLECTION;

}