<?php

namespace TMobileApiClient\Models;

/**
 * Class SimEvent
 * @property string timestamp
 * @property string event_type
 * @property string iccid
 * @property string imei
 * @property string imsi
 * @property string country
 * @property string operator
 * @property string mcc
 * @property string mnc
 * @property bool   alert
 * @property string event_severity
 * @package TMobileApiClient\Models
 */
class SimEvent
{

	/*** @return string */
	public function getTimestamp(): string
	{
		return $this->timestamp ?? '';
	}

	/*** @return string */
	public function getEventType(): string
	{
		return $this->event_type ?? '';
	}

	/*** @return string */
	public function getIccid(): string
	{
		return $this->iccid;
	}

	/*** @return string */
	public function getImei(): string
	{
		return $this->imei ?? '';
	}

	/*** @return string */
	public function getImsi(): string
	{
		return $this->imsi ?? '';
	}

	/*** @return string */
	public function getCountry(): string
	{
		return $this->country ?? '';
	}

	/*** @return string */
	public function getOperator(): string
	{
		return $this->operator ?? '';
	}

	/*** @return string */
	public function getMcc(): string
	{
		return $this->mcc ?? '';
	}

	/*** @return string */
	public function getMnc(): string
	{
		return $this->mnc ?? '';
	}

	/*** @return bool */
	public function isAlert(): bool
	{
		return $this->alert;
	}

	/*** @return string */
	public function getEventSeverity(): string
	{
		return $this->event_severity ?? '';
	}

}