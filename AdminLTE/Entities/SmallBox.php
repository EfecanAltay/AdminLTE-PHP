<?php

class SmallBox{

  public $text1 = "";
  public $text2 = "";
  public $bgcolor ="";
  public $ionicon ="";
  public $linkName ="";
  public $link ="white";
  
	function __construct($color = "white" ,$text1 ="",$text2 ="" ,$ionicon = "" , $linkName="",$link=""){
    $this->bgcolor = $color ;
    $this->ionicon = $ionicon ; 
	  $this->text1 = $text1 ; 
    $this->text2 = $text2 ; 
    $this->linkName = $linkName ; 
    $this->link = $link ; 
     
  }

	function Render(){
		echo '<div class="small-box bg-'.$this->bgcolor.'">
            <div class="inner">
              <h3>'.$this->text1.'</h3>

              <p>'.$this->text2.'</p>
            </div>
            <div class="icon">
              <i class="ion '.$this->ionicon.'"></i>
            </div>
            <a href="'.$this->link.'" class="small-box-footer">'.$this->linkName.' <i class="fa fa-arrow-circle-right"></i></a>
          </div>';
	}

}
?>