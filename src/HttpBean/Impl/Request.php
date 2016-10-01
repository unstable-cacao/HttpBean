<?php
namespace HttpBean\Impl;


use HttpBean\IParams;
use HttpBean\IRequest;
use HttpBean\IRequestType;


class Request implements IRequest
{
	public function type() : IRequestType
	{
		// TODO: Implement type() method.
	}

	public function getType() : string
	{
		// TODO: Implement getType() method.
	}

	public function getRequestBody() : string
	{
		// TODO: Implement getRequestBody() method.
	}

	public function get() : IParams
	{
		// TODO: Implement get() method.
	}

	public function post() : IParams
	{
		// TODO: Implement post() method.
	}

	public function headers() : IParams
	{
		// TODO: Implement headers() method.
	}

	public function cookies() : IParams
	{
		// TODO: Implement cookies() method.
	}

	public function session() : IParams
	{
		// TODO: Implement session() method.
	}

	public function server() : IParams
	{
		// TODO: Implement server() method.
	}
}