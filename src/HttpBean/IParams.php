<?php
/**
 * Created by PhpStorm.
 * User: namp
 * Date: 10/1/16
 * Time: 2:19 PM
 */

namespace HttpBean;


interface IParams
{
	public function param(string $key) : string;
	public function has(string $key) : bool;
	
	public function asInt(string $key, int $def = 0) : int;
	public function asBool(string $key, bool $def = false) : bool;
	public function asFloat(string $key, float $def = 0.0) : float;
	public function asOneOf(array $values, $def = null);
	public function asRegex(string $key, string $regex, string $def = '') : string;

	/**
	 * @param string $enum TEnum class name.
	 * @param string $def
	 * @return string
	 */
	public function asEnum(string $enum, string $def = '') : string;
}