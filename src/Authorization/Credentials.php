<?php

namespace TMobileApiClient\Authorization;

/**
 * Class Credentials
 * @package TMobileApiClient\Authorization
 */
class Credentials
{

	/*** @var string */
	private string $username;

	/*** @var string */
	private string $secret;

	/**
	 * @param $username
	 * @param $secret
	 */
	public function __construct($username, $secret)
	{
		$this->setUsername($username);
		$this->setSecret($secret);
	}

	/*** @param string $username */
	public function setUsername(string $username): void
	{
		$this->username = $username;
	}

	/*** @param string $secret */
	public function setSecret(string $secret): void
	{
		$this->secret = $secret;
	}

	/*** @return string */
	public function getBase64(): string
	{
		return base64_encode(sprintf('%s:%s', $this->username, $this->secret));
	}

}