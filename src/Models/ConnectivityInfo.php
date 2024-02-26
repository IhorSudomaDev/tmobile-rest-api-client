<?php

namespace TMobileApiClient\Models;

/**
 * Class ConnectivityInfo
 * @property UssdInfo       ussd_info
 * @property SubscriberInfo subscriber_info
 * @property string         request_timestamp
 * @property string         reply_timestamp
 * @package TMobileApiClient\Models
 */
class ConnectivityInfo
{
	/*** @return UssdInfo */
	public function getUssdInfo(): UssdInfo
	{
		return $this->ussd_info;
	}

	/*** @return SubscriberInfo */
	public function getSubscriberInfo(): SubscriberInfo
	{
		return $this->subscriber_info;
	}

	/*** @return string */
	public function getRequestTimestamp(): string
	{
		return $this->request_timestamp ?? '';
	}

	/*** @return string */
	public function getReplyTimestamp(): string
	{
		return $this->reply_timestamp ?? '';
	}

}