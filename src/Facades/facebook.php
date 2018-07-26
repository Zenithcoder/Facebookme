<?php

namespace zenithcoder\facebook\Facades;
use Illuminate\Support\Facades\Facade;

class Facebook extends Facade {

	public static function getFacadeAccessor()
	{
		return "fbm";
	}

}