<?php

/**
* \ErrorController
*/
class ErrorController extends BaseController
{
  
	public function error()
	{	
		$this->display('public/error');
	}
}