<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\SubmitSmsResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class SubmitSmsRequest
 * @package TMobileApiClient\Requests\Sims
 */
class SubmitSmsRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_SMS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_POST;

	/*** @var string */
	protected string $responseClass = SubmitSmsResponse::class;

	/*** @var array */
	protected array $availableInputParameters = [
		'payload'        => '',
		'source_address' => '',
		'udh'            => '',
		'dcs'            => '',
		'expiry_date'    => '',
	];

	/**
	 * @param Authorization $authorization
	 * @param string        $iccid
	 * @param string        $message
	 * @param string|NULL   $sourceAddress
	 * @param string|NULL   $udh
	 * @param string|NULL   $dcs
	 * @param string|NULL   $expiryDate
	 */
	public function __construct(Authorization $authorization, string $iccid, string $message, ?string $sourceAddress = NULL, ?string $udh = NULL, ?string $dcs = NULL, ?string $expiryDate = NULL)
	{
		parent::__construct($authorization, $iccid);
		$this->availableInputParameters['payload']        = $message;
		$this->availableInputParameters['source_address'] = $sourceAddress ?? $iccid;
		$this->availableInputParameters['udh']            = $udh ?? '';
		$this->availableInputParameters['dcs']            = $dcs ?? '';
		$this->availableInputParameters['expiry_date']    = $expiryDate ?? '';
	}

}