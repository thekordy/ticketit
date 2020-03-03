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
			$methodName = 'set' . $colNameCamelCase;

			if (method_exists($model, $methodName)) {
				$model->{$methodName}($value);
			}
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