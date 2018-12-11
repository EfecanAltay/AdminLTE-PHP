<?php

class NotifyData{

	public $id = 0 ; 
	public $time = "" ;
  public $content = "" ;

   	function __construct($id = 0 , $littleContent = "", $str_time = "") {
      $this->id = $id ;
      $this->time = $str_time;
      $this->content = $littleContent;
   	}

}
class Notifications{
    public $notifyList = Array() ;

    function __construct() {
        $this->notifyList = Array() ;
    }
    function AddNotify($notifyData){

      array_push($this->notifyList,$notifyData);
    }

    function ToStr(){
    $NotifyCount = strval(sizeof($this->notifyList));

    return '<li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">'.$NotifyCount.'</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have '.$NotifyCount.' notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      '.$this->RenderNotifyList().'
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>';
    }
    function Render(){
      echo $this->ToStr();
    }
    function RenderNotifyList(){
        $str_lst ="";
        foreach ($this->notifyList as $value ) {
           $str_lst .= $this->RenderNotifyRow($value->id, $value->content,"#");
        }
        return $str_lst;
    }
    function RenderNotifyRow($id ,$little_content ,$link){
      return '<li>
                <a href="'.$link.'">
                  <i class="fa fa-users text-aqua"></i>'.$little_content.'
                </a>
              </li>';
    }
}




?>