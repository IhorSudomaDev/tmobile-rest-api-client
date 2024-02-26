<?php

namespace TMobileApiClient\Responses\_AbstractResponses;

use TMobileApiClient\ValuesObjects\ModelFactory;

/**
 * Class AListResponse
 * @package TMobileApiClient\Responses
 */
abstract class AListResponse extends AResponse
{

	/*** @var string */
	protected string $modelClass;

	/**
	 * @param $result
	 * @return array
	 */
	public function get($result): array
	{
		$list      = [];
		$modelName = '\TMobileApiClient\Models\\' . $this->modelClass;
		if ( ! empty($result)) {
			foreach ($result as $product) {
				$list[] = ModelFactory::create(new $modelName(), $product);
			}
		}
		return $list;
	}

}