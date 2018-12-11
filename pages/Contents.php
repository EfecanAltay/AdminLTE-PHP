<?php

require_once('../DataModels/ContentWrapper.php');

class HomeContent{
	public $parentContent ;
	function __construct() {
		$this->parentContent = new ContentWrapper("Anasayfa",null);
   	}
   	function Render(){
		$this->parentContent->Render();
   	}
}

class ProfileContent{
	public $parentContent ;
	function __construct() {
		$this->parentContent = new ContentWrapper("Anasayfa",null);
   	}
   	function Render(){
		$this->parentContent->Render();
   	}
}

?>