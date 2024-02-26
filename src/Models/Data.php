<?php

namespace TMobileApiClient\Models;

/**
 * Class Data
 * @property string      cost
 * @property array       currency
 * @property TrafficType traffic_type
 * @property string      volume
 * @property string      volume_rx
 * @property string      volume_tx
 * @package TMobileApiClient\Models
 */
class Data
{

	/*** @return string */
	public function getCost(): string
	{
		return $this->cost ?? '';
	}

	/*** @return array */
	public function getCurrency(): array
	{
		return $this->currency ?? [];
	}

	/*** @return TrafficType */
	public function getTrafficType(): TrafficType
	{
		return $this->traffic_type;
	}

	/*** @return string */
	public function getVolume(): string
	{
		return $this->volume ?? '';
	}

	/*** @return string */
	public function getVolumeRx(): string
	{
		return $this->volume_rx ?? '';
	}

	/*** @return string */
	public function getVolumeTx(): string
	{
		return $this->volume_tx ?? '';
	}

}