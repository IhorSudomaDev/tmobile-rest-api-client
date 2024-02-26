<?php

namespace TMobileApiClient\Models;

/**
 * Class Order
 * @property int                        order_number
 * @property string                     order_type
 * @property string                     order_date
 * @property string                     order_status
 * @property string                     invoice_number
 * @property string                     invoice_amount
 * @property string                     currency
 * @property Address                    shipping_address
 * @property Sim[]|array                sims
 * @property ProductInformation[]|array products
 * @package TMobileApiClient\Models
 */
class Order
{

	/*** @return int */
	public function getOrderNumber(): int
	{
		return $this->order_number;
	}

	/*** @return string */
	public function getOrderType(): string
	{
		return $this->order_type ?? '';
	}

	/*** @return string */
	public function getOrderDate(): string
	{
		return $this->order_date ?? '';
	}

	/*** @return string */
	public function getOrderStatus(): string
	{
		return $this->order_status ?? '';
	}

	/*** @return string */
	public function getInvoiceNumber(): string
	{
		return $this->invoice_number ?? '';
	}

	/*** @return string */
	public function getInvoiceAmount(): string
	{
		return $this->invoice_amount ?? '';
	}

	/*** @return string */
	public function getCurrency(): string
	{
		return $this->currency ?? '';
	}

	/*** @return Address */
	public function getShippingAddress(): Address
	{
		return $this->shipping_address;
	}

	/*** @return array|Sim[] */
	public function getSims(): array
	{
		return $this->sims ?? [];
	}

	/*** @return array|ProductInformation[] */
	public function getProducts(): array
	{
		return $this->products ?? [];
	}

}