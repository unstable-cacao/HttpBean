<?php
namespace HttpBean;


/**
 * @skeleton
 */
interface IRequest
{
	public function type() : IRequestType;
	public function getType() : string;
	public function getRequestBody() : string;
	
	public function get() : IParams;
	public function post() : IParams;
	public function headers() : IParams;
	public function cookies() : IParams;
	public function session() : IParams;
	public function server() : IParams;
}