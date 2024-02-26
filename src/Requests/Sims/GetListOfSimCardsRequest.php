<?php

namespace TMobileApiClient\Requests\Sims;

use TMobileApiClient\Requests\_AbstractRequests\ARequest;
use TMobileApiClient\Requests\_Traits\Pagination;
use TMobileApiClient\Responses\Sims\GetListOfSimCardsResponse;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class GetListOfSimCardsRequest
 * @package TMobileApiClient\Requests\Sims
 */
class GetListOfSimCardsRequest extends ARequest
{

	use Pagination;

	/*** @var string */
	protected string $routePrefix = ApiRoute::SIM_CARDS;

	/*** @var string */
	protected string $method = HttpMethod::HTTP_GET;

	/*** @var array */
	protected array $availableInputParameters = [
		'page'     => 1,
		'pageSize' => 10,
		'q'        => '',
		'sort'     => '',
	];

	/*** @var string */
	protected string $responseClass = GetListOfSimCardsResponse::class;

	/**
	 * @param string $filter
	 * @return $this
	 */
	public function withFilter(string $filter): self
	{
		$this->availableInputParameters['q'] = $filter;
		return $this;
	}

}