<?php
class SideBarMenu{
	
	public $menuBtnList;	

	function __construct(){
		$this->menuBtnList = Array();
	}
	function AddButton($button){
		array_push($this->menuBtnList,$button);
	}

	function RenderItems(){
		$btnListStr = "";
			foreach ($this->menuBtnList as $key => $value) {
				$btnListStr .= $value->ToStr();
			}
		return $btnListStr;
	}
	function Render(){
		echo '    
		  <aside class="main-sidebar" >
		    <!-- sidebar: style can be found in sidebar.less -->
		    <section class="sidebar">
		      <!-- sidebar menu: : style can be found in sidebar.less -->
		      <ul class="sidebar-menu" data-widget="tree">
		        '.$this->RenderItems().'
		      </ul>
		    </section>
		    <!-- /.sidebar -->
		  </aside>';
	}

}
?>
