<?php

namespace Controllers;

class HomeController
{
	protected $twig;

	
	public function __construct()
	{
		$loader =  new \Twig_Loader_Filesystem(__DIR__ . '/../views');
		$this->twig = new \Twig_Environment($loader);
	}
	public function get()
	{
		echo $this->twig->render("index.html" , array(
				"title" => "Bioskop"));
	}
}
?>