<?php

namespace TMobileApiClient\Requests\Orders;

use TMobileApiClient\Requests\_AbstractRequests\ARequest;
use TMobileApiClient\Requests\_Traits\Pagination;
use TMobileApiClient\Responses\Orders\GetListOfOrdersResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class GetListOfOrdersRequest
 * @package TMobileApiClient\Requests\Orders
 */
class GetListOfOrdersRequest extends ARequest
{

	use Pagination;

	/*** @var string */
	protected string $routePrefix = ApiRoute::ORDERS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var array */
	protected array $availableInputParameters = [
		'page'     => 1,
		'pageSize' => 10,
		'sort'     => 'order_number',
	];

	/*** @var string */
	protected string $responseClass = GetListOfOrdersResponse::class;

}