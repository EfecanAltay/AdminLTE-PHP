<?php
class Footer{
	
	public $footertext = "10.0";
	public $version = "" ;
   	function __construct($footertext = "",$version = "10.0.1" ) {
      $this->footertext = $footertext ;
      $this->version = $version ;
   	}

	function ToStr(){
		return '  
		<footer class="main-footer">
		    <div class="pull-right hidden-xs">
		      <b>Version</b> '.$this->version.'
		    </div>
		    <strong>'.$this->footertext.'</strong> All rights
		    reserved.
		</footer>';
	}
	function Render(){
		echo $this->ToStr();
	}
	
}
?>