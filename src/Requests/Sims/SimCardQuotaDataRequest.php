<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\GetSimCardQuotaDataResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class SimCardQuotaDataRequest
 * @package TMobileApiClient\Requests\Sims
 */
class SimCardQuotaDataRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_QUOTA_DATA;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	protected string $responseClass = GetSimCardQuotaDataResponse::class;

}