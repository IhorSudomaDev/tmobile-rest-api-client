<?php

namespace TMobileApiClient\Responses\Orders;

use TMobileApiClient\Responses\_AbstractResponses\ASingleModelResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetOrderResponse
 * @package TMobileApiClient\Responses\Orders
 */
class GetOrderResponse extends ASingleModelResponse
{

	/*** @var string */
	protected string $modelClass = Model::ORDER;

}