<?php

namespace TMobileApiClient\Responses\Products;

use TMobileApiClient\Responses\_AbstractResponses\AListResponse;
use TMobileApiClient\ValuesObjects\Model;

/**
 * Class GetListOfProductsResponse
 * @package TMobileApiClient\Responses\Products
 */
class GetListOfProductsResponse extends AListResponse
{

	/*** @var string */
	protected string $modelClass = Model::PRODUCT;

}