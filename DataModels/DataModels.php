<?php

class UserDataModel{
	
	public $username = "none";
	public $name = "";
	public $lastname = "";

   	function __construct($username = "") {
      $this->$username = $username ;
   	}
   	function SetInfo($name , $lastname){
   		$this->$name = $name ;
   		$this->$lastname = $lastname ;
   	}
}



?>