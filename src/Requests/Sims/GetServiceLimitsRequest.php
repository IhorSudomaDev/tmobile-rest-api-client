<?php

namespace TMobileApiClient\Requests\Sims;

use RuntimeException;
use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Requests\_AbstractRequests\ARequest;
use TMobileApiClient\Responses\Sims\GetServiceLimitsResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;
use TMobileApiClient\ValuesObjects\Service;

/**
 * Class GetServiceLimitsRequest
 * @package TMobileApiClient\Requests\Sims
 */
class GetServiceLimitsRequest extends ARequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SERVICE_LIMITS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	protected string $responseClass = GetServiceLimitsResponse::class;

	/*** @var string */
	protected string $service;

	/**
	 * @param Authorization $authorization
	 * @param string        $service
	 */
	public function __construct(Authorization $authorization, string $service)
	{
		if ( ! Service::isValid($service)) {
			throw new RuntimeException('Service is incorrect');
		}
		parent::__construct($authorization);
		$this->setService($service);
	}

	/*** @return string */
	public function getService(): string
	{
		return $this->service;
	}

	/**
	 * @param string $service
	 */
	public function setService(string $service): void
	{
		$this->service = $service;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), $this->getService());
	}

}