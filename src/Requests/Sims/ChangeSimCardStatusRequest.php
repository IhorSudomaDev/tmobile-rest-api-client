<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\ChangeSimCardStatusResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class ChangeSimCardStatusRequest
 * @package TMobileApiClient\Requests\Sims
 */
class ChangeSimCardStatusRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_PUT;

	/*** @var string */
	protected string $responseClass = ChangeSimCardStatusResponse::class;

	/*** @var string */
	protected string $status;

	/*** @var array */
	protected array $availableInputParameters = [
		'status' => '',
	];

	/**
	 * @param Authorization $authorization
	 * @param string        $iccid
	 * @param string        $status
	 */
	public function __construct(Authorization $authorization, string $iccid, string $status)
	{
		parent::__construct($authorization, $iccid);
		$this->availableInputParameters['status'] = $status;
	}

}