<?php
class MenuTreeButton{
	
	public $menuList;	
	public $btnText ; 
	public $faicon ;

	public $notifyCount;

	function __construct($btnText = "" , $faicon = "fa-dashboard"){
		$this->menuList = Array();
		$this->btnText = $btnText;
		$this->faicon = $faicon;
	}
	function CreateButton($btnName = ""){
		array_push($this->menuList,new MenuButton($btnName));
	}
	function AddButton($button){
		array_push($this->menuList,$button);
	}
	function ToStrItems(){
		$btnlistStr = "" ;
			foreach ($this->menuList as $key => $value) {
				$value->textColor = "black";
				$btnlistStr .= $value->ToStr();
			}
		return $btnlistStr;
	}
	function OnClick(){
		echo "hi";
	}
	function ToStr(){
		$str = '
		<li class="treeview">
          <a onclick="document.write(<?php OnClick(); ?>);" href="#">
            <i class="fa '.$this->faicon.'"></i> <span>'.$this->btnText.'</span>
            <span class="pull-right-container">';

        if($this->ToStrItems() != "")
        	$str .= '<i class="fa fa-angle-left pull-right"></i>';

		if($this->notifyCount>0){
			$str  .= '<span class="label label-primary pull-left">'.$this->notifyCount.'</span>';
		}
		$str .= '  
			</span>
          </a>
          <ul class="treeview-menu bg-gray">
			'.$this->ToStrItems().'
          </ul>
        </li>'; 

		return $str ;
	}
	function Render(){
		echo $this->ToStr();
	}
	function SetNotifyNumber($count){
		$this->notifyCount = $count ;
	}
}
class MenuHeaderButton{
	
	public $btnText;
	public $textColor;
	public $faicon ="fa-dashboard";
	public $isActive =false;
	public $link = "";
	
	function __construct($btnText = "" , $link = "" ,$textColor = ""){
		$this->btnText = $btnText;
		$this->link = $link;
		$this->textColor = $textColor;	
	}
	function Render(){
		echo $this->ToStr();
	}
	function ToStr(){
		$isActiveStr = "";
		if($this->isActive) 
			$isActiveStr = '<class="active">' ;
		$linkStr = "";
		$iconStr = "";
		if($this->link != "")
			$linkStr = '<a href="'.$this->link.'">';
		if($this->faicon != "")
			$iconStr = '<i class="fa '.$this->faicon.'"></i> ';
		return '<li class="header text-'.$this->textColor.'" '.$isActiveStr.'>
			'.$linkStr.$this->btnText.'</a></li>'  ;
	}
	function SetActive($isActive){
		$this->isActive = $isActive ;
	}
}
class MenuButton{
	
	public $btnText ; 
	public $faicon ="fa-dashboard";
	public $isActive =false;
	public $link = "";
	public $icolor = "" ;
	public $textColor = "";
	
	function __construct($btnText = "" , $faicon = "fa-circle-o", $link = "#" , $textColor = "", $icolor = ""){
		$this->btnText = $btnText;
		$this->faicon = $faicon;
		$this->link = $link;
		$this->textColor = $textColor;
		if($icolor == "")
			$this->icolor = $textColor;
	}
	function Render(){
		echo ToStr();
	}
	function ToStr(){
		$isActiveStr = "";
		if($this->isActive) 
			$isActiveStr = 'active' ;
		return '
        <li class="'.$isActiveStr.'">
        	<a href="#" style="color:'.$this->textColor.'">
        		<i class="fa '.$this->faicon.' text-'.$this->icolor.'"></i> 
        		<span>
        			'.$this->btnText.'
        		</span>
        	</a>
        </li>';
	}
	function SetActive($isActive){
		$this->isActive = $isActive ;
		$this->textColor = "";
		if($isActive)
			$this->textColor = "white";
	}
}
?>
