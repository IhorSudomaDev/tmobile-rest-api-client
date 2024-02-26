<?php

namespace TMobileApiClient\Requests\Orders;

use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Requests\_AbstractRequests\ARequest;
use TMobileApiClient\Responses\Orders\GetOrderResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class GetOrderRequest
 * @package TMobileApiClient\Requests\Orders
 */
class GetOrderRequest extends ARequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::ORDER;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	private string $orderNumber;

	/*** @var string */
	protected string $responseClass = GetOrderResponse::class;

	/**
	 * @param Authorization $authorization
	 * @param string        $orderNumber
	 */
	public function __construct(Authorization $authorization, string $orderNumber)
	{
		parent::__construct($authorization);
		$this->setOrderNumber($orderNumber);
	}

	/*** @return string */
	protected function getOrderNumber(): string
	{
		return $this->orderNumber;
	}

	/*** @param string $orderNumber */
	protected function setOrderNumber(string $orderNumber): void
	{
		$this->orderNumber = $orderNumber;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), $this->getOrderNumber());
	}
}