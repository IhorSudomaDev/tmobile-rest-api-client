<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\GetSimCardQuotaSmsResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class SimCardQuotaSmsRequest
 * @package TMobileApiClient\Requests\Sims
 */
class SimCardQuotaSmsRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_QUOTA_SMS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	protected string $responseClass = GetSimCardQuotaSmsResponse::class;

}