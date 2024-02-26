<?php

namespace TMobileApiClient\Models;

/**
 * Class SmsData
 * @property int          id
 * @property string       submit_date
 * @property string       delivery_date
 * @property string       expiry_date
 * @property string       final_date
 * @property string       retry_date
 * @property string       last_delivery_attempt
 * @property string       retry_count
 * @property string       source_address
 * @property string       iccid
 * @property string       msisdn
 * @property string       imsi
 * @property string       msc
 * @property int          dcs
 * @property string       udh
 * @property string       payload
 * @property Status       status
 * @property SmsType      sms_type
 * @property  AddressType source_address_type
 * @package TMobileApiClient\Models
 */
class SmsData
{

	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/*** @return string */
	public function getSubmitDate(): string
	{
		return $this->submit_date ?? '';
	}

	/*** @return string */
	public function getDeliveryDate(): string
	{
		return $this->delivery_date ?? '';
	}

	/*** @return string */
	public function getExpiryDate(): string
	{
		return $this->expiry_date ?? '';
	}

	/*** @return string */
	public function getFinalDate(): string
	{
		return $this->final_date ?? '';
	}

	/*** @return string */
	public function getRetryDate(): string
	{
		return $this->retry_date ?? '';
	}

	/*** @return string */
	public function getLastDeliveryAttempt(): string
	{
		return $this->last_delivery_attempt ?? '';
	}

	/*** @return string */
	public function getRetryCount(): string
	{
		return $this->retry_count ?? '';
	}

	/*** @return string */
	public function getSourceAddress(): string
	{
		return $this->source_address ?? '';
	}

	/*** @return string */
	public function getIccid(): string
	{
		return $this->iccid ?? '';
	}

	/*** @return string */
	public function getMsisdn(): string
	{
		return $this->msisdn ?? '';
	}

	/*** @return string */
	public function getImsi(): string
	{
		return $this->imsi ?? '';
	}

	/*** @return string */
	public function getMsc(): string
	{
		return $this->msc ?? '';
	}

	/*** @return int */
	public function getDcs(): int
	{
		return $this->dcs;
	}

	/*** @return string */
	public function getUdh(): string
	{
		return $this->udh ?? '';
	}

	/*** @return string */
	public function getPayload(): string
	{
		return $this->payload ?? '';
	}

	/*** @return Status */
	public function getStatus(): Status
	{
		return $this->status;
	}

	/*** @return SmsType */
	public function getSmsType(): SmsType
	{
		return $this->sms_type;
	}

	/*** @return AddressType */
	public function getSourceAddressType(): AddressType
	{
		return $this->source_address_type;
	}

}