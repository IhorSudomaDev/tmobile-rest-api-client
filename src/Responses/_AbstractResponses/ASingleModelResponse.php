<?php

namespace TMobileApiClient\Responses\_AbstractResponses;

use TMobileApiClient\Exceptions\NotFoundException;
use TMobileApiClient\ValuesObjects\ModelFactory;

/**
 * Class ASingleModelResponse
 * @package TMobileApiClient\Responses
 */
class ASingleModelResponse extends AResponse
{

	/*** @var string */
	protected string $modelClass;

	/**
	 * @param $result
	 * @return mixed
	 * @throws NotFoundException
	 */
	public function get($result)
	{
		if (empty($result)) {
			throw new NotFoundException($this->modelClass);
		}
		$modelName = '\TMobileApiClient\Models\\' . $this->modelClass;
		return ModelFactory::create(new $modelName(), $result);
	}

}