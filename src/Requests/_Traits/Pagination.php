<?php

namespace TMobileApiClient\Requests\_Traits;

use RuntimeException;

/**
 * Trait Pagination
 * @property $availableInputParameters
 */
trait Pagination
{

	/**
	 * @param int $page
	 * @return $this
	 */
	public function withPage(int $page): self
	{
		if ( ! is_numeric($page) || $page < 0) {
			throw new RuntimeException('Incorrect Page parameter');
		}
		$this->availableInputParameters['page'] = $page;
		return $this;
	}

	/**
	 * @param int $pageSize
	 * @return $this
	 */
	public function withPageSize(int $pageSize): self
	{
		if ( ! is_numeric($pageSize) || $pageSize < 0) {
			throw new RuntimeException('Incorrect Page Size parameter');
		}
		$this->availableInputParameters['pageSize'] = $pageSize;
		return $this;
	}

	/**
	 * @param string $sort
	 * @return $this
	 */
	public function withSort(string $sort): self
	{
		$this->availableInputParameters['sort'] = $sort;
		return $this;
	}

}