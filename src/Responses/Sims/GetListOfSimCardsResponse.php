<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\AListResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetListOfSimCardsResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetListOfSimCardsResponse extends AListResponse
{

	/*** @var string */
	protected string $modelClass = Model::SIM_CARD;

}