<?php

namespace TMobileApiClient\Models;

/**
 * Class SimCard
 * @property string         iccid
 * @property string         imsi
 * @property string         imsi_2
 * @property string         current_imsi
 * @property string         msisdn
 * @property string         imei
 * @property bool           imei_lock
 * @property string         status
 * @property string         activation_date
 * @property string         ip_address
 * @property int            current_quota
 * @property QuotaStatus    quota_status
 * @property int            current_quota_SMS
 * @property QuotaStatusSms quota_status_SMS
 * @property string         label
 * @package TMobileApiClient\Models
 */
class SimCard
{
	/*** @return string */
	public function getIccid(): string
	{
		return $this->iccid;
	}

	/*** @return string */
	public function getImsi(): string
	{
		return $this->imsi ?? '';
	}

	/*** @return string */
	public function getImsi2(): string
	{
		return $this->imsi_2 ?? '';
	}

	/*** @return string */
	public function getCurrentImsi(): string
	{
		return $this->current_imsi ?? '';
	}

	/*** @return string */
	public function getMsisdn(): string
	{
		return $this->msisdn ?? '';
	}

	/*** @return string */
	public function getImei(): string
	{
		return $this->imei ?? '';
	}

	/*** @return bool */
	public function isImeiLock(): bool
	{
		return $this->imei_lock;
	}

	/*** @return string */
	public function getStatus(): string
	{
		return $this->status;
	}

	/*** @return string */
	public function getActivationDate(): string
	{
		return $this->activation_date ?? '';
	}

	/*** @return string */
	public function getIpAddress(): string
	{
		return $this->ip_address ?? '';
	}

	/*** @return int */
	public function getCurrentQuota(): int
	{
		return $this->current_quota;
	}

	/*** @return QuotaStatus */
	public function getQuotaStatus(): QuotaStatus
	{
		return $this->quota_status;
	}

	/*** @return int */
	public function getCurrentQuotaSMS(): int
	{
		return $this->current_quota_SMS;
	}

	/*** @return QuotaStatusSms */
	public function getQuotaStatusSMS(): QuotaStatusSms
	{
		return $this->quota_status_SMS;
	}

	/*** @return string */
	public function getLabel(): string
	{
		return $this->label ?? '';
	}

}