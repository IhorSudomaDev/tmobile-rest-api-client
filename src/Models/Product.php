<?php

namespace TMobileApiClient\Models;

/**
 * Class Product
 * @property int            id
 * @property string         product
 * @property string         material
 * @property int            package_size
 * @property int            minQuantity
 * @property int            maxQuantity
 * @property int            maxQuantityPerCustomer
 * @property int            min_contract_duration
 * @property Charge[]|array one_time_charges
 * @property Charge[]|array recurring_charges
 * @package TMobileApiClient\Models
 */
class Product
{
	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/*** @return string */
	public function getProduct(): string
	{
		return $this->product ?? '';
	}

	/*** @return string */
	public function getMaterial(): string
	{
		return $this->material ?? '';
	}

	/*** @return int */
	public function getPackageSize(): int
	{
		return $this->package_size;
	}

	/*** @return int */
	public function getMinQuantity(): int
	{
		return $this->minQuantity;
	}

	/*** @return int */
	public function getMaxQuantity(): int
	{
		return $this->maxQuantity;
	}

	/*** @return int */
	public function getMaxQuantityPerCustomer(): int
	{
		return $this->maxQuantityPerCustomer;
	}

	/*** @return int */
	public function getMinContractDuration(): int
	{
		return $this->min_contract_duration;
	}

	/*** @return array|Charge[] */
	public function getOneTimeCharges(): array
	{
		return $this->one_time_charges;
	}

	/*** @return array|Charge[] */
	public function getRecurringCharges(): array
	{
		return $this->recurring_charges;
	}

}