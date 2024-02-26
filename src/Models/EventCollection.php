<?php

namespace TMobileApiClient\Models;

/**
 * Class EventCollection
 * @property SimEvent[]|array events
 * @property int              totalEvents
 * @property int              totalPages
 * @package TMobileApiClient\Models
 */
class EventCollection
{

	/*** @return array|SimEvent[] */
	public function getEvents(): array
	{
		return $this->events;
	}

	/*** @return int */
	public function getTotalEvents(): int
	{
		return $this->totalEvents;
	}

	/*** @return int */
	public function getTotalPages(): int
	{
		return $this->totalPages;
	}

}