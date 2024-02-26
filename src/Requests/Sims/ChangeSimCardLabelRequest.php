<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\ChangeSimCardLabelResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class ChangeSimCardLabelRequest
 * @package TMobileApiClient\Requests\Sims
 */
class ChangeSimCardLabelRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_PUT;

	/*** @var string */
	protected string $responseClass = ChangeSimCardLabelResponse::class;

	/*** @var string */
	protected string $status;

	/*** @var array */
	protected array $availableInputParameters = [
		'label' => '',
	];

	/**
	 * @param Authorization $authorization
	 * @param string        $iccid
	 * @param string|NULL   $label
	 */
	public function __construct(Authorization $authorization, string $iccid, ?string $label = NULL)
	{
		parent::__construct($authorization, $iccid);
		$this->availableInputParameters['label'] = $label ?? '';
	}

}