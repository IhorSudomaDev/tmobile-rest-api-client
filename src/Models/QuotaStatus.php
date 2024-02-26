<?php

namespace TMobileApiClient\Models;

/**
 * Class QuotaStatus
 * @property int    id
 * @property string description
 * @property string threshold_reached_date
 * @property string quota_exceeded_date
 * @package TMobileApiClient\Models
 */
class QuotaStatus
{
	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/*** @return string */
	public function getDescription(): string
	{
		return $this->description ?? '';
	}

	/*** @return string */
	public function getThresholdReachedDate(): string
	{
		return $this->threshold_reached_date ?? '';
	}

	/*** @return string */
	public function getQuotaExceededDate(): string
	{
		return $this->quota_exceeded_date ?? '';
	}

}