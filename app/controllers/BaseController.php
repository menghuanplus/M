<?php
/**
* BaseController
*/
class BaseController
{
  
	public function __construct()
	{
	}

	public function display($filePath, $data = [])
	{	
		extract($data);
		require dirname(__FILE__).'/../views/'.$filePath.'.php';
	}

	// 包含模板
	public function render($filePath)
	{
		require dirname(__FILE__).'/../views/public/'.$filePath.'.php';
	}

	public function load_js($file)
	{
		$mtime = filemtime(".".$file);
		echo '<script src="'.$file.'?v='.$mtime.'"></script>';
	}

	public function load_css($file)
	{
		$mtime = filemtime(".".$file);
		echo '<link rel="stylesheet" href="'.$file.'?v='.$mtime.'">';
	}
	
}