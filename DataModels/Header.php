<?php

require_once('MessageNotification.php');
require_once('Notifications.php');

class Header {
	
	public $components = Array();

	public $footertext = "10.0";
	public $version = "" ;
   	function __construct($footertext = "",$version = "10.0.1" ) {
      $this->footertext = $footertext ;
      $this->version = $version ;
	  $this->components = Array();

      $mnotify = new MessageNotification();
      $this->AddComponent($mnotify);

	  $notify = new Notifications();
      $this->AddComponent($notify);

      
   	}

   	function AddComponent($component){
   		array_push($this->components,$component);
   	}
   	function ToStrComponents(){
   		$render_str ="";
   		foreach ($this->components as $key => $value) {
   			$render_str .= $value->ToStr();
   		}
   		return $render_str ;
   	}  	
   	function RenderComponents(){
   		echo $this->ToStr();
   	}
	function ToStr(){
		return '
		  <header class="main-header">
		    <!-- Logo -->
		    <a href="dashboard.php" class="logo">
		      <!-- mini logo for sidebar mini 50x50 pixels -->
		      <span class="logo-mini"><b>LS</b></span>
		      <!-- logo for regular state and mobile devices -->
		      <span class="logo-lg"><b>LiSa</b></span>
		    </a>
		    <!-- Header Navbar: style can be found in header.less -->
		    <nav class="navbar navbar-static-top">
		      <!-- Sidebar toggle button
		      -->
		      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		        <span class="sr-only">Toggle navigation</span>

		        Menu
		      </a>
		      
		      <div class="navbar-custom-menu">
		        <ul class="nav navbar-nav">
		          <!-- Messages: style can be found in dropdown.less-->
		          '.
		          	$this->ToStrComponents()

		           // NotifyRender();
		           // MessageNotifyRender();
		           // RenderPanel("Efecan Altay");

		          .'
		          <!-- User Account: style can be found in dropdown.less -->
		          <!-- Control Sidebar Toggle Button -->
		        </ul>
		      </div>
		    </nav>
		  </header>
		';
	}
	function Render(){
		echo $this->ToStr();
	}
	
}
?>