<?php

/*
 * This file is part of the Wendaosi package which is just for test.
 *
 * (c) cqkd6381 <cqkd6381@163.com>
 *
 */

namespace Wendaosi;

class Wendaosi
{
	protected $msg;

	public function __construct($msg = 'composer test')
	{
		$this->msg = $msg;
	}

	public function printMsg()
	{
		return $this->msg;
	}
}
