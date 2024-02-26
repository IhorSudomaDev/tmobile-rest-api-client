<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Requests\_Traits\Pagination;
use TMobileApiClient\Responses\Sims\GetSimCardEventsResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class SimCardEventsRequest
 * @package TMobileApiClient\Requests\Sims
 */
class SimCardEventsRequest extends ASimCardRequest
{

	use Pagination;

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_EVENTS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	protected string $responseClass = GetSimCardEventsResponse::class;

	/*** @var array */
	protected array $availableInputParameters = [
		'page'     => 1,
		'pageSize' => 10,
		'sort'     => '',
	];

}