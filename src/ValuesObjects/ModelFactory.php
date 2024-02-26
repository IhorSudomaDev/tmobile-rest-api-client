<?php

namespace TMobileApiClient\ValuesObjects;

use Exception;
use stdClass;
use TMobileApiClient\Models\Charge;
use TMobileApiClient\Models\CurrentLimit;
use TMobileApiClient\Models\Daily;
use TMobileApiClient\Models\Link;
use TMobileApiClient\Models\ProductInformation;
use TMobileApiClient\Models\SelectableLimits;
use TMobileApiClient\Models\Sim;
use TMobileApiClient\Models\SimEvent;
use TMobileApiClient\Models\TrafficType;

/**
 * Class ModelFactory
 * @package TMobileApiClient\ValuesObjects
 */
class ModelFactory
{

	/**
	 * @param $model
	 * @param $data
	 * @return mixed
	 */
	public static function create($model, $data)
	{
		foreach ($data as $key => $value) {
			if ($value instanceof stdClass) {
				try {
					$modelClass = '\TMobileApiClient\Models\\' . str_replace('_', '', ucwords($key, '_'));
					if (class_exists($modelClass)) {
						$model->$key = self::create(new $modelClass(), $value);
					} else {
						$model->$key = $value;
					}
				} catch (Exception $e) {
					echo $e->getMessage();
				}
			} else if (is_array($value)) {
				$model->$key = [];
				foreach ($value as $item) {
					switch ($key) {
						case 'sims':
							$newModel = new Sim();
							break;
						case 'products':
							$newModel = new ProductInformation();
							break;
						case '_links':
							$newModel = new Link();
							break;
						case 'events':
							$newModel = new SimEvent();
							break;
						case 'recurring_charges':
						case 'one_time_charges':
							$newModel = new Charge();
							break;
						case 'stats':
							$newModel = new Daily();
							break;
						case 'traffic_type':
							$newModel = new TrafficType();
							break;
						case 'data':
						case 'smsMt':
						case 'smsMo':
							$newModel = new CurrentLimit();
							break;
						case 'selectableLimits':
							$newModel = new SelectableLimits();
							break;
						default:
							$newModel = new stdClass();
							break;
					}
					try {
						$model->$key[] = self::create($newModel, $item);
					} catch (Exception $e) {
						echo $e->getMessage();
					}
				}
			} else {
				$model->$key = $value;
			}
		}
		return $model;
	}

}