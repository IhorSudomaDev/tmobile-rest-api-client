<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetSimCardResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetSimCardResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::SIM_CARD;

}