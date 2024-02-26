<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\GetSimCardSmsDetailsResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class SimCardSmsDetailsRequest
 * @package TMobileApiClient\Requests\Sims
 */
class SimCardSmsDetailsRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_SMS_DETAILS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var string */
	protected string $responseClass = GetSimCardSmsDetailsResponse::class;

	/*** @var int */
	protected int $smsId;

	/**
	 * @param Authorization $authorization
	 * @param string        $iccid
	 * @param int           $smsId
	 */
	public function __construct(Authorization $authorization, string $iccid, int $smsId)
	{
		parent::__construct($authorization, $iccid);
		$this->setSmsId($smsId);
	}

	/*** @return string */
	protected function getSmsId(): string
	{
		return $this->smsId;
	}

	/*** @param string $smsId */
	protected function setSmsId(string $smsId): void
	{
		$this->smsId = $smsId;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), $this->getIccid(), $this->getSmsId());
	}

}