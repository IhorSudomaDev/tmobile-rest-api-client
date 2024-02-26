<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\GetSimCardConnectivityInfoResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class SimCardConnectivityInfoRequest
 * @package TMobileApiClient\Requests\Sims
 */
class SimCardConnectivityInfoRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_CONNECTIVITY_INFO;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var array */
	protected array $availableInputParameters = [
		'subscriber' => TRUE,
		'ussd'       => FALSE,
	];

	/*** @var string */
	protected string $responseClass = GetSimCardConnectivityInfoResponse::class;

	/**
	 * @param bool $value
	 * @return $this
	 */
	public function withSubscriber(bool $value): self
	{
		$this->availableInputParameters['subscriber'] = $value;
		return $this;
	}

	/**
	 * @param bool $value
	 * @return $this
	 */
	public function withUssd(bool $value): self
	{
		$this->availableInputParameters['ussd'] = $value;
		return $this;
	}

}