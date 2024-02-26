<?php

namespace TMobileApiClient\Responses\Orders;

use TMobileApiClient\Responses\_AbstractResponses\AListResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetListOfOrdersResponse
 * @package TMobileApiClient\Responses\Orders
 */
class GetListOfOrdersResponse extends AListResponse
{

	/*** @var string */
	protected string $modelClass = Model::ORDER;

}