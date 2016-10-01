<?php
use Skeleton\Skeleton;
use Skeleton\ConfigLoader\DirectoryConfigLoader;


class HttpBean
{
	use \Objection\TStaticClass;
	
	
	/** @var Skeleton */
	private static $skeleton;
	
	
	private static function config()
	{
		self::$skeleton = new Skeleton();
		
		self::$skeleton
			->setConfigLoader(
				new DirectoryConfigLoader(
					realpath(__DIR__ . '/../skeleton')
				)
			)
			->registerGlobalFor('HttpBean');
	}


	/**
	 * @return Skeleton
	 */
	public static function skeleton() : Skeleton
	{
		if (!self::$skeleton)
			self::config();
		
		return self::$skeleton;
	}

	/**
	 * @param string $key
	 * @return mixed
	 */
	public static function get(string $key)
	{
		if (!self::$skeleton)
			self::config();
		
		return self::$skeleton->get($key);
	}


	/**
	 * @return bool
	 */
	public static function isWebRequest() : bool
	{
		return (!defined('STDIN') && php_sapi_name() !== 'cli');
	}
}