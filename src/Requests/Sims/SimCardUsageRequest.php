<?php

namespace TMobileApiClient\Requests\Sims;

use RuntimeException;
use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Requests\_AbstractRequests\SimCard\ASimCardRequest;
use TMobileApiClient\Responses\Sims\GetSimCardUsageResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class SimCardUsageRequest
 * @package TMobileApiClient\Requests\Sims
 */
class SimCardUsageRequest extends ASimCardRequest
{

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARD_USAGE;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var array */
	protected array $availableInputParameters = [
		'start_dt' => '',
		'end_dt'   => '',
	];

	/*** @var string */
	protected string $responseClass = GetSimCardUsageResponse::class;

	/*** @var string */
	protected string $message = 'The format of the date is incorrect';

	/**
	 * @param Authorization $authorization
	 * @param string        $iccid
	 * @param string        $startDate
	 * @param string        $endDate
	 */
	public function __construct(Authorization $authorization, string $iccid, string $startDate, string $endDate)
	{
		parent::__construct($authorization, $iccid);
		$this->withStartAt($startDate);
		$this->withEndAt($endDate);
	}

	/**
	 * @param string $date
	 * @return $this
	 */
	protected function withStartAt(string $date): self
	{
		if ($this->isValidateDate($date)) {
			$this->availableInputParameters['start_dt'] = $date;
			return $this;
		}
		throw new RuntimeException($this->message);
	}

	/**
	 * @param string $date
	 * @return $this
	 */
	protected function withEndAt(string $date): self
	{
		if ($this->isValidateDate($date)) {
			$this->availableInputParameters['end_dt'] = $date;
			return $this;
		}
		throw new RuntimeException($this->message);
	}

	/**
	 * @param $date
	 * @return bool
	 */
	private function isValidateDate($date): bool
	{
		return (bool) (preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $date));
	}

}