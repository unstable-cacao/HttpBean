<?php
namespace HttpBean\Impl;


use HttpBean\IParams;


class Params implements IParams
{
	/**
	 * @param array $dataSource
	 */
	public function __construct(array $dataSource)
	{
	}


	public function param(string $key) : string
	{
		// TODO: Implement param() method.
	}

	public function has(string $key) : bool
	{
		// TODO: Implement has() method.
	}

	public function asInt(string $key, int $def = 0) : int
	{
		// TODO: Implement asInt() method.
	}

	public function asBool(string $key, bool $def = false) : bool
	{
		// TODO: Implement asBool() method.
	}

	public function asFloat(string $key, float $def = 0.0) : float
	{
		// TODO: Implement asFloat() method.
	}

	public function asOneOf(array $values, $def = null)
	{
		// TODO: Implement asOneOf() method.
	}

	public function asRegex(string $key, string $regex, string $def = '') : string
	{
		// TODO: Implement asRegex() method.
	}

	/**
	 * @param string $enum TEnum class name.
	 * @param string $def
	 * @return string
	 */
	public function asEnum(string $enum, string $def = '') : string
	{
		// TODO: Implement asEnum() method.
	}
}