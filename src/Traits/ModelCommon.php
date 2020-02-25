<?php

namespace Kordy\Ticketit\Traits;

trait ModelCommon
{
	/**
	 * @inheritDoc
	 */
	public static function fromArray(array $data)
	{
		$model = new self();

		foreach ($data as $key => $value) {
			$colNameCamelCase = str_replace('_', '', ucwords($key, '_'));
			$model->{'set'.$colNameCamelCase}($value);
		}

		return $model;
	}

	/**
	 * @inheritDoc
	 */
	public function setId(int $id): self
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getId(): int
	{
		return $this->id;
	}
}