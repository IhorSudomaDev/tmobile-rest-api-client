<?php

namespace TMobileApiClient\Requests\_AbstractRequests\SimCard;

use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Requests\_AbstractRequests\ARequest;
use TMobileApiClient\ValuesObjects\ApiRoute;

/**
 * Class ASimCardRequest
 * @package TMobileApiClient\Requests\Sims\AbstractRequest
 */
abstract class ASimCardRequest extends ARequest
{

	/*** @var string */
	protected string $iccid;

	/**
	 * @param Authorization $authorization
	 * @param string        $iccid
	 */
	public function __construct(Authorization $authorization, string $iccid)
	{
		parent::__construct($authorization);
		$this->setIccid($iccid);
	}

	/*** @return string */
	protected function getIccid(): string
	{
		return $this->iccid;
	}

	/*** @param string $iccid */
	protected function setIccid(string $iccid): void
	{
		$this->iccid = $iccid;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), $this->getIccid());
	}

}