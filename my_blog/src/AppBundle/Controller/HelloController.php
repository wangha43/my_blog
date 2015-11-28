<?php

namespace AppBundle\Controller;

class HelloController {
	public function indexAction($name) {
		// replace this example code with whatever you need
		return new Response('<html><body>Hello ' . $name . '!</body></html>');
	}

}