<?php

namespace TMobileApiClient\Models;

/**
 * Class Sms
 * @property string      source_address
 * @property string      payload
 * @property string      udh
 * @property int         dcs
 * @property AddressType source_address_type
 * @property string      expiry_date
 * @package TMobileApiClient\Models
 */
class Sms
{
	/*** @return string */
	public function getSourceAddress(): string
	{
		return $this->source_address ?? '';
	}

	/*** @return string */
	public function getPayload(): string
	{
		return $this->payload ?? '';
	}

	/*** @return string */
	public function getUdh(): string
	{
		return $this->udh ?? '';
	}

	/*** @return int */
	public function getDcs(): int
	{
		return $this->dcs;
	}

	/*** @return AddressType */
	public function getSourceAddressType(): AddressType
	{
		return $this->source_address_type;
	}

	/*** @return string */
	public function getExpiryDate(): string
	{
		return $this->expiry_date ?? '';
	}

	/*** @return array */
	public function toArray(): array
	{
		return [
			'source_address'      => $this->getSourceAddress(),
			'payload'             => $this->getPayload(),
			'udh'                 => $this->getUdh(),
			'dcs'                 => $this->getDcs(),
			'source_address_type' => $this->getSourceAddressType(),
			'expiry_date'         => $this->getExpiryDate(),
		];
	}
}