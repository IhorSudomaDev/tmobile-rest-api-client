<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\TopupSimCardResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class TopupSimCardRequest
 * @package TMobileApiClient\Requests\Sims
 */
class TopupSimCardRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_TOPUP;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_POST;

	/*** @var string */
	protected string $responseClass = TopupSimCardResponse::class;

}