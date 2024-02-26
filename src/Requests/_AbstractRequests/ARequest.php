<?php

namespace TMobileApiClient\Requests\_AbstractRequests;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use RuntimeException;
use TMobileApiClient\Authorization\Authorization;
use TMobileApiClient\Exceptions\AuthorizationException;
use TMobileApiClient\Exceptions\ForbiddenException;
use TMobileApiClient\Exceptions\PageNotFoundException;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class ARequest
 * @package TMobileApiClient\Requests
 */
abstract class ARequest implements IRequest
{

	/*** @var Authorization */
	protected Authorization $authorization;
	/*** @var Client */
	protected Client $client;
	/*** @var string */
	protected string $responseClass;
	/*** @return string */
	protected string $method;
	/*** @var array */
	protected array $availableInputParameters = [];

	/*** @param Authorization $authorization */
	public function __construct(Authorization $authorization)
	{
		$this->authorization = $authorization;
		$this->client        = new Client();
	}

	/***
	 * @return mixed
	 * @throws Exception|GuzzleException
	 */
	public function send()
	{
		if ($this->method === HttpMethod::HTTP_GET) {
			$jsonData = '{}';
			$data     = $this->getData();
		} else {
			$jsonData = json_encode($this->getData(), JSON_THROW_ON_ERROR);
			$data     = '';
		}
		$result = $this->client->request(
			$this->method,
			$this->getUrl(),
			[
				'verify'  => TRUE,
				'headers' => [
					'Content-Type'  => 'application/json',
					'authorization' => $this->authorization->getAuthHeader(),
				],
				'query'   => $data,
				'body'    => $jsonData,
			]
		);
		switch ($result->getStatusCode()) {
			case 200:
				$resultContent = $result->getBody()->getContents();
				if (empty($resultContent)) {
					$resultContent = '[]';
				}
				return (new $this->responseClass())->get(json_decode($resultContent, FALSE, 512, JSON_THROW_ON_ERROR));
			case 204:
			case 201:
				return TRUE;
			case 401:
				throw new AuthorizationException();
			case 403:
				throw new ForbiddenException();
			case 404:
				throw new PageNotFoundException();
			default:
				throw new RuntimeException('Status Code: ' . $result->getStatusCode());
		}
	}

	/*** @return array */
	public function getData(): array
	{
		$parameters = [];
		foreach ($this->availableInputParameters as $key => $value) {
			if ($value !== NULL) {
				$parameters[$key] = $value;
			}
		}
		return $parameters;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return ApiRoute::getFor($this->routePrefix);
	}

}