<?php

class Home extends Controller {

	public function index($params = null){
		// render the model like this:
		//$blog = $this->model('Blog');
		//$posts = $blog->displayPosts();	
		//or directly with the autoloader.
		// the fetchAll method return an object array with DB data.
		$helloWorld = hello_HelloWorld::helloWorld();
		// view takes: page_title,[array of (optional: multiple)view files],params from the router,array of data from model
		$this->view('Home',['hello-world.php'],$params,['hello' => $helloWorld['example']]);	
	}
}
?>