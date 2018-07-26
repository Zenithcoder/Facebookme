<?php
namespace zenithcoder\facebook\Controllers;

use App\Http\Controllers\Controller;

class FacebookController extends Controller 
{
	public function __construct()
	{
	//	parent::__construct();
	}

	public function index()
	{
		return view("fbp::home");
	}
}