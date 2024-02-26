<?php

namespace TMobileApiClient;

use Carbon\Carbon;
use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Requests\Orders\GetListOfOrdersRequest;
use TMobileApiClient\Requests\Orders\GetOrderRequest;
use TMobileApiClient\Requests\Products\GetListOfProductsRequest;
use TMobileApiClient\Requests\Sims\CancelSimCardSmsRequest;
use TMobileApiClient\Requests\Sims\ChangeSimCardLabelRequest;
use TMobileApiClient\Requests\Sims\ChangeSimCardStatusRequest;
use TMobileApiClient\Requests\Sims\GetListOfSimCardsRequest;
use TMobileApiClient\Requests\Sims\GetMonthlyLimitsRequest;
use TMobileApiClient\Requests\Sims\GetServiceLimitsRequest;
use TMobileApiClient\Requests\Sims\ResetSimCardRequest;
use TMobileApiClient\Requests\Sims\SimCardConnectivityInfoRequest;
use TMobileApiClient\Requests\Sims\SimCardEventsRequest;
use TMobileApiClient\Requests\Sims\SimCardQuotaDataRequest;
use TMobileApiClient\Requests\Sims\SimCardQuotaSmsRequest;
use TMobileApiClient\Requests\Sims\SimCardRequest;
use TMobileApiClient\Requests\Sims\SimCardSmsDetailsRequest;
use TMobileApiClient\Requests\Sims\GetListOfSimCardSmsRequest;
use TMobileApiClient\Requests\Sims\SimCardUsageRequest;
use TMobileApiClient\Requests\Sims\SubmitSmsRequest;
use TMobileApiClient\Requests\Sims\TopupSimCardRequest;

/**
 * Class TMobileApiClient
 * @package TMobileApiClient
 */
class TMobileApiClient
{

	/*** @var Authorization */
	private Authorization $authorization;

	/*** @param Authorization $authorization */
	public function __construct(Authorization $authorization)
	{
		$this->setAuthorization($authorization);
	}

	/*** @return Authorization */
	public function getAuthorization(): Authorization
	{
		return $this->authorization;
	}

	/*** @param Authorization $authorization */
	public function setAuthorization(Authorization $authorization): void
	{
		$this->authorization = $authorization;
	}

	/*** @return GetListOfOrdersRequest */
	public function getListOfOrders(): GetListOfOrdersRequest
	{
		return new GetListOfOrdersRequest($this->getAuthorization());
	}

	/***
	 * @param string $orderNumber
	 * @return GetOrderRequest
	 */
	public function getOrder(string $orderNumber): GetOrderRequest
	{
		return new GetOrderRequest($this->getAuthorization(), $orderNumber);
	}

	/*** @return GetListOfProductsRequest */
	public function getListOfProducts(): GetListOfProductsRequest
	{
		return new GetListOfProductsRequest($this->getAuthorization());
	}

	/*** @return GetListOfSimCardsRequest */
	public function getListOfSimCards(): GetListOfSimCardsRequest
	{
		return new GetListOfSimCardsRequest($this->getAuthorization());
	}

	/***
	 * @param string $iccid
	 * @return SimCardRequest
	 */
	public function getSimCard(string $iccid): SimCardRequest
	{
		return new SimCardRequest($this->getAuthorization(), $iccid);
	}

	/**
	 * @param string $iccid
	 * @return SimCardConnectivityInfoRequest
	 */
	public function getSimCardConnectivityInformation(string $iccid): SimCardConnectivityInfoRequest
	{
		return new SimCardConnectivityInfoRequest($this->getAuthorization(), $iccid);
	}

	/**
	 * @param string $iccid
	 * @return SimCardEventsRequest
	 */
	public function getListOfSimCardEvents(string $iccid): SimCardEventsRequest
	{
		return new SimCardEventsRequest($this->getAuthorization(), $iccid);
	}

	/***
	 * @param string $iccid
	 * @param string $startDate
	 * @param string $endDate
	 * @return SimCardUsageRequest
	 */
	public function getSimCardUsage(string $iccid, string $startDate, string $endDate): SimCardUsageRequest
	{
		return new SimCardUsageRequest($this->getAuthorization(), $iccid, $startDate, $endDate);
	}

	/***
	 * @param string $iccid
	 * @return SimCardQuotaDataRequest
	 */
	public function getSimCardQuotaDataRequest(string $iccid): SimCardQuotaDataRequest
	{
		return new SimCardQuotaDataRequest($this->getAuthorization(), $iccid);
	}

	/***
	 * @param string $iccid
	 * @return SimCardQuotaSmsRequest
	 */
	public function getSimCardQuotaSmsRequest(string $iccid): SimCardQuotaSmsRequest
	{
		return new SimCardQuotaSmsRequest($this->getAuthorization(), $iccid);
	}

	/***
	 * @param string $iccid
	 * @return GetListOfSimCardSmsRequest
	 */
	public function getListOfSimCardSmsRequest(string $iccid): GetListOfSimCardSmsRequest
	{
		return new GetListOfSimCardSmsRequest($this->getAuthorization(), $iccid);
	}

	/***
	 * @param string $iccid
	 * @param int    $smsId
	 * @return SimCardSmsDetailsRequest
	 */
	public function getSimCardSmsDetailsRequest(string $iccid, int $smsId): SimCardSmsDetailsRequest
	{
		return new SimCardSmsDetailsRequest($this->getAuthorization(), $iccid, $smsId);
	}

	/***
	 * @param string $service
	 * @return GetServiceLimitsRequest
	 */
	public function getServiceLimitsRequest(string $service): GetServiceLimitsRequest
	{
		return new GetServiceLimitsRequest($this->getAuthorization(), $service);
	}

	/**** @return GetMonthlyLimitsRequest */
	public function getMonthlyLimitsRequest(): GetMonthlyLimitsRequest
	{
		return new GetMonthlyLimitsRequest($this->getAuthorization());
	}

	/**
	 * @param string      $iccid
	 * @param string      $message
	 * @param string|NULL $sourceAddress
	 * @param string|NULL $udh
	 * @param string|NULL $dcs
	 * @param Carbon|NULL $expiryDate
	 * @return SubmitSmsRequest
	 */
	public function submitSmsTo(string $iccid, string $message, ?string $sourceAddress = NULL, ?string $udh = NULL, ?string $dcs = NULL, ?Carbon $expiryDate = NULL): SubmitSmsRequest
	{
		$expiryDate = $expiryDate ?? Carbon::now('UTC')->addDays(10);
		return new SubmitSmsRequest($this->getAuthorization(), $iccid, $message, $sourceAddress, $udh, $dcs, $expiryDate->format('Y-m-d\TH:i:s.000+0000'));
	}

	/***
	 * @param string $iccid
	 * @param int    $smsId
	 * @return CancelSimCardSmsRequest
	 */
	public function cancelSms(string $iccid, int $smsId): CancelSimCardSmsRequest
	{
		return new CancelSimCardSmsRequest($this->getAuthorization(), $iccid, $smsId);
	}

	/***
	 * @param string $iccid
	 * @return TopupSimCardRequest
	 */
	public function topupSimCard(string $iccid): TopupSimCardRequest
	{
		return new TopupSimCardRequest($this->getAuthorization(), $iccid);
	}

	/***
	 * @param string $iccid
	 * @return ResetSimCardRequest
	 */
	public function resetSimCard(string $iccid): ResetSimCardRequest
	{
		return new ResetSimCardRequest($this->getAuthorization(), $iccid);
	}

	/***
	 * @param string $iccid
	 * @param string $status
	 * @return ChangeSimCardStatusRequest
	 */
	public function changeSimCardStatusRequest(string $iccid, string $status): ChangeSimCardStatusRequest
	{
		return new ChangeSimCardStatusRequest($this->getAuthorization(), $iccid, $status);
	}

	/**
	 * @param string $iccid
	 * @param string $label
	 * @return ChangeSimCardLabelRequest
	 */
	public function changeSimCardLabelRequest(string $iccid, string $label): ChangeSimCardLabelRequest
	{
		return new ChangeSimCardLabelRequest($this->getAuthorization(), $iccid, $label);
	}

}