<?php
class Content{
	
	public $headerText ; 
	public $headerDescription ; 
	
	public $isActive =false;
	public $link = "";
	
	function __construct($headerText = "" , $headerDescription = ""){
		$this->headerText = $headerText;
		$this->headerDescription = $headerDescription;
	}
	function ToStr(){
		return '    
	<section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>'  ;
	}
	
	function Render(){
		echo $this->ContentStr(); 
	}
}
class ContentHeader{
	
	public $headerText = "" ; 
	public $headerDescription ; 
	
	public $isActive =false;
	public $link = "";
	public $breadcrumbStr = "";

	function __construct($headerText = "none" , $headerDescription = "none"){
		$this->headerText = $headerText;
		$this->headerDescription = $headerDescription;
	}
	function ToStr(){
		return ' 
		<section class="content-header">
			<h1>
	        '.$this->headerText.'
	        <small>'.$this->headerDescription.'</small>
	      	</h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        '.$this->breadcrumbStr.'
	        <li class="active">'.$this->headerText.'</li>
	      </ol>
	      </section>'  ;
	}
	function Render(){
		echo $this->ToStr();
	}
	function SetActive($isActive){
		$this->isActive = $isActive ;
	}
}
class ContentWrapper{
	public $parentContent = null ;
	public $contentHeader ;
	public $content ;

	function __construct($contentTitle = "", $content = null , $parentContent = null){
		$this->content = $content;
		$this->contentHeader = new ContentHeader($contentTitle);
		
		if(isset($parentContent)){
			$this->contentHeader->breadcrumbStr .= '<li class="active">'.$parentContent->contentHeader->headerText.'</li>';
			$this->parentContent = $parentContent;
		}
	}  
	function Render(){
		$contentStr = "";

		if(isset($this->contentHeader))
			$contentStr .= $this->contentHeader->ToStr();
		if(isset($this->content))
			$contentStr .= $this->content->ToStr();
		
		echo ' 
		<div class="content-wrapper">
	    <!-- Content Header (Page header) -->  
		    '.$contentStr.'
		</div>';
	}
}
?>