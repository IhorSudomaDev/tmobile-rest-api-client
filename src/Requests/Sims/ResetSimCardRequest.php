<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\ResetSimCardResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class ResetSimCardRequest
 * @package TMobileApiClient\Requests\Sims
 */
class ResetSimCardRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_RESET;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_POST;

	/*** @var string */
	protected string $responseClass = ResetSimCardResponse::class;

}