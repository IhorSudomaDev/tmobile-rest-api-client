<?php

namespace TMobileApiClient\Models;

/**
 * Class Address
 * @property string salutation
 * @property string first_name
 * @property string last_name
 * @property string company
 * @property string street
 * @property string house_number
 * @property string zip
 * @property string city
 * @property string country
 * @package TMobileApiClient\Models
 */
class Address
{

	/*** @return string */
	public function getSalutation(): string
	{
		return $this->salutation ?? '';
	}

	/*** @return string */
	public function getSalutationTitle(): string
	{
		return $this->getSalutation() === '1' ? 'Mr' : 'Ms';
	}

	/*** @return string */
	public function getFirstName(): string
	{
		return $this->first_name ?? '';
	}

	/*** @return string */
	public function getLastName(): string
	{
		return $this->last_name ?? '';
	}

	/*** @return string */
	public function getCompany(): string
	{
		return $this->company ?? '';
	}

	/*** @return string */
	public function getStreet(): string
	{
		return $this->street ?? '';
	}

	/*** @return string */
	public function getHouseNumber(): string
	{
		return $this->house_number ?? '';
	}

	/*** @return string */
	public function getZip(): string
	{
		return $this->zip ?? '';
	}

	/*** @return string */
	public function getCity(): string
	{
		return $this->city ?? '';
	}

	/*** @return string */
	public function getCountry(): string
	{
		return $this->country ?? '';
	}

}