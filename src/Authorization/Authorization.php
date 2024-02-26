<?php

namespace TMobileApiClient\Authorization;

use Carbon\Carbon;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use TMobileApiClient\Exceptions\AuthorizationException;
use TMobileApiClient\ValuesObjects\ApiRoute;
use TMobileApiClient\ValuesObjects\HttpMethod;

/**
 * Class Authorization
 * @package TMobileApiClient\Authorization
 */
class Authorization
{

	/*** @var Credentials */
	private Credentials $credentials;

	/*** @var AuthToken */
	private AuthToken $authToken;

	/**
	 * @param Credentials $credentials
	 * @param string|NULL $token
	 * @param Carbon|NULL $expiredAt
	 * @throws AuthorizationException
	 */
	public function __construct(Credentials $credentials, ?string $token = NULL, ?Carbon $expiredAt = NULL)
	{
		$this->setCredentials($credentials);
		$this->setAuthToken(new AuthToken($token, $expiredAt));
		if ( ! $this->getAuthToken()->isValid()) {
			$this->auth();
		}
	}

	/*** @return Credentials */
	public function getCredentials(): Credentials
	{
		return $this->credentials;
	}

	/*** @param Credentials $credentials */
	public function setCredentials(Credentials $credentials): void
	{
		$this->credentials = $credentials;
	}

	/*** @return AuthToken */
	public function getAuthToken(): AuthToken
	{
		return $this->authToken;
	}

	/*** @param AuthToken $authToken */
	public function setAuthToken(AuthToken $authToken): void
	{
		$this->authToken = $authToken;
	}

	/*** @return bool */
	public function isValid(): bool
	{
		return ! empty($this->authToken) && $this->authToken->isValid();
	}

	/*** @return string */
	public function getAuthHeader(): string
	{
		return sprintf('Bearer %s', $this->getAuthToken()->getToken());
	}

	/**
	 * @return Authorization
	 * @throws AuthorizationException
	 */
	public function auth(): Authorization
	{
		try {
			$client       = new Client();
			$response     = $client->request(
				HttpMethod::HTTP_POST,
				ApiRoute::BASE,
				[
					'verify'      => TRUE,
					'headers'     => [
						'Content-Type'  => 'application/x-www-form-urlencoded',
						'Cache-Control' => 'no-cache',
						'authorization' => sprintf('Basic %s', $this->getCredentials()->getBase64()),
					],
					'form_params' => [
						'grant_type' => 'client_credentials',
					],
				]
			);
			$authResponse = json_decode(($response->getBody())->getContents(), TRUE, 512, JSON_THROW_ON_ERROR);
			if (isset($authResponse['access_token'])) {
				$this->setAuthToken(new AuthToken($authResponse['access_token'], Carbon::now('UTC')->addSeconds($authResponse['expires_in'])));
			} else {
				throw new AuthorizationException();
			}
			return $this;
		} catch (Exception|GuzzleException $e) {
			throw new AuthorizationException($e->getMessage());
		}
	}

}