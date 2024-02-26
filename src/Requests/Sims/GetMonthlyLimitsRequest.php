<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\ARequest;
use TMobileApiClient\Responses\Sims\GetMonthlyLimitsResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class GetMonthlyLimitsRequest
 * @package TMobileApiClient\Requests\Sims
 */
class GetMonthlyLimitsRequest extends ARequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::MONTHLY_LIMITS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	protected string $responseClass = GetMonthlyLimitsResponse::class;

}