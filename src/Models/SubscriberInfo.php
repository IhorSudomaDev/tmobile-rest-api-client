<?php

namespace TMobileApiClient\Models;

/**
 * Class SubscriberInfo
 * @property bool         current_location_retrieved
 * @property int          age_of_location
 * @property CellGlobalId cell_global_id
 * @package TMobileApiClient\Models
 */
class SubscriberInfo
{
	/*** @return bool */
	public function isCurrentLocationRetrieved(): bool
	{
		return $this->current_location_retrieved;
	}

	/*** @return int */
	public function getAgeOfLocation(): int
	{
		return $this->age_of_location;
	}

	/*** @return CellGlobalId */
	public function getCellGlobalId(): CellGlobalId
	{
		return $this->cell_global_id;
	}

}