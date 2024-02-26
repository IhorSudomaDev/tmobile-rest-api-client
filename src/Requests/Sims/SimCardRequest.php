<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\GetSimCardResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class SimCardRequest
 * @package TMobileApiClient\Requests\Sims
 */
class SimCardRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	protected string $responseClass = GetSimCardResponse::class;

}