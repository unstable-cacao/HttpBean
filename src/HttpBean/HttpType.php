<?php
namespace HttpBean;


class HttpType
{
	use \Objection\TEnum;
	
	
	const GET		= 'get';
	const POST		= 'post';
	const PUT		= 'put';
	const DELETE	= 'delete';
	const OPTIONS	= 'options';
	
	const OTHER		= 'other';
}