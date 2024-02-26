<?php

namespace TMobileApiClient\Models;

/**
 * Class Quota
 * @property int    volume
 * @property int    total_volume
 * @property string expiry_date
 * @property int    peak_throughput
 * @property int    last_volume_added
 * @property string last_status_change_date
 * @property int    threshold_percentage
 * @package TMobileApiClient\Models
 */
class Quota
{
	/*** @return int */
	public function getVolume(): int
	{
		return $this->volume;
	}

	/*** @return int */
	public function getTotalVolume(): int
	{
		return $this->total_volume;
	}

	/*** @return string */
	public function getExpiryDate(): string
	{
		return $this->expiry_date ?? '';
	}

	/*** @return int */
	public function getPeakThroughput(): int
	{
		return $this->peak_throughput;
	}

	/*** @return int */
	public function getLastVolumeAdded(): int
	{
		return $this->last_volume_added;
	}

	/*** @return string */
	public function getLastStatusChangeDate(): string
	{
		return $this->last_status_change_date ?? '';
	}

	/*** @return int */
	public function getThresholdPercentage(): int
	{
		return $this->threshold_percentage;
	}

}