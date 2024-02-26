<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\GetListOfSimCardSmsResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class GetListOfSimCardSmsRequest
 * @package TMobileApiClient\Requests\Sims
 */
class GetListOfSimCardSmsRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_SMS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	protected string $responseClass = GetListOfSimCardSmsResponse::class;

}