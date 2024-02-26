<?php

namespace TMobileApiClient\Responses\Sims;

use TMobileApiClient\Responses\_AbstractResponses\AListResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetListOfSimCardSmsResponse
 * @package TMobileApiClient\Responses\Sims
 */
class GetListOfSimCardSmsResponse extends AListResponse
{

	/*** @var string */
	protected string $modelClass = Model::SMS_DATA;

}