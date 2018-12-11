<?php

class MessageData{

	public $massageName = "" ; 
	public $messageTime = "" ;
  public $littleContent = "" ;

   	function __construct($messageTitle = "" , $littleContent = "", $str_time = "") {
      $this->massageName = $messageTitle ;
      $this->messageTime = $str_time;
      $this->littleContent = $littleContent;
   	}

}
class MessageNotification{
  public $messageNotifyList = Array() ;

  function __construct($messageTitle = "" , $littleContent = "", $str_time = "") {
      $this->messageNotifyList = Array() ;
  }
  function AddMessage($messageData){
    array_push($this->messageNotifyList,$messageData);
  }

  function Render(){
    echo $this->ToStr();
  }
  function ToStr(){
    $messageNotifyCount = strval(sizeof($this->messageNotifyList));

    return ' <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">'.$messageNotifyCount.'</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have '.$messageNotifyCount.' messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    '.$this->RenderMessageList().'
                  </ul>
                </li>
                <li class="footer"><a href="#">Go to Message Page</a></li>
              </ul>
            </li>';
  }

  function RenderMessageList(){
    $str_lst ="";
    foreach ($this->messageNotifyList as $value ) {
       $str_lst .= RenderMessageNotifyRow($value->massageName, $value->messageTime,$value->littleContent,"#");
    }
    return $str_lst;
  }
  function RenderMessageNotifyRow($title , $str_time , $little_content ,$link){
  return '<li>
            <a href="'.$link.'">
            <div class="pull-left">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </div>
              <h4>
                '.$title.'
                 <small><i class="fa fa-clock-o"></i>  '.$str_time.'</small>
              </h4>
            <p>'.$little_content.'</p>
          </a>
        </li>';
  }
}



?>