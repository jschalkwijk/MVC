<?php

class hello_HelloWorld {
	private $message;
	
	public function __construct($message){
		$this->message = $message;
	}
	
	public static function helloWorld(){
		$example = new hello_HelloWorld('Hello World');
		return ['example' => $example];
	}
	
	public function displayMessage(){
		return $this->message;
	}
}
?>