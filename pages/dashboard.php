<!DOCTYPE html>
<html>
<head>
<?php
  require_once('../AdminLTE/AdminLTE.php');
  adminlteLibs();

  $contentIndex = 0;

?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <?php

  $header = new Header();
  $header->Render();

  $sbMenu = new SideBarMenu();
  $btn_Anasayfa = new MenuTreeButton("Anasayfa");
  
  $btn_Profile = new MenuTreeButton("Profil");

  
  //$sbMenu->AddButton($btn);
  $sbMenu->AddButton($btn_Anasayfa);
  $sbMenu->AddButton($btn_Profile);


  $sbMenu->Render();

  switch ($contentIndex) {
     case 0:
      $content = new HomeContent();
      $content->Render();
       break;
     
     default:
      $content = new HomeContent();
      $content->Render();
       break;
   } 

  $footer = new Footer("Wrise Software ");
  $footer->Render();
  ?>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->
<?php 
  Wrapper();
?>
</body>
</html>