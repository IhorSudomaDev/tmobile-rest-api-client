<?php

namespace TMobileApiClient\Models;

/**
 * Class ProductInformation
 * @property int product_id
 * @property int quantity
 * @package TMobileApiClient\Models
 */
class ProductInformation
{

	/*** @return int */
	public function getProductId(): int
	{
		return $this->product_id;
	}

	/*** @return int */
	public function getQuantity(): int
	{
		return $this->quantity;
	}

}