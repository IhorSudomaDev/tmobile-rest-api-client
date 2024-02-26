<?php

namespace TMobileApiClient\Requests\Products;

use TMobileApiClient\Requests\_AbstractRequests\ARequest;
use TMobileApiClient\Responses\Products\GetListOfProductsResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class GetListOfProductsRequest
 * @package TMobileApiClient\Requests\Products
 */
class GetListOfProductsRequest extends ARequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::PRODUCTS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	protected string $responseClass = GetListOfProductsResponse::class;

}