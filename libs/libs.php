<?php
echo '
  <script src="../dist/jquery.min.js"></script>
  <script src="../dist/components/form.min.js"></script>
  <script src="../dist/components/visibility.js"></script>
  <script src="../dist/components/sidebar.js"></script>
  <script src="../dist/components/transition.js"></script>
  <link rel="stylesheet" type="text/css" href="../dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/transition.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/form.min.css">
  <link rel="stylesheet" type="text/css" href="../stylesheets/m_style.css">' ;


function SocialMediaButtons(){
	echo '		
	<div id="socialMediaButtons">
		<div class="ui relaxed horizontal list">
		  <div class="item">
		      	<button class="ui twitter button">
		  		<i class="twitter icon"></i>
		  		Twitter
				</button>
		  </div>
		  <div class="item">
				<button class="ui google plus button">
		  		<i class="google plus icon"></i>
		  		Google Plus
				</button>
		  </div>
		  <div class="item">
				<button class="ui vk button">
		  		<i class="vk icon"></i>
		  		VK
				</button>
		  </div>
		  <div class="item">
				<button class="ui linkedin button">
		  		<i class="linkedin icon"></i>
		  		LinkedIn
				</button>
		  </div>
		  <div class="item">
				<button class="ui instagram button">
		  		<i class="instagram icon"></i>
		  		Instagram
				</button>
		  </div>
		  <div class="item">
				<button class="ui youtube button">
				  <i class="youtube icon"></i>
				  YouTube
				</button>
		  </div>
		</div>
	</div>';
}

function AdminLTELibs(){

	echo ' <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Styles.Render("~/Content/AdminLTE/css")-->
    
    <!--Scripts.Render("~/Content/AdminLTE/js")-->
    <!-- jQuery 3 -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>$.widget.bridge("uibutton", $.ui.button);</script>
    <!-- Bootstrap 3.3.7 -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/raphael/raphael.min.js"></script>
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="@Url.Content("~/Content/AdminLTE/")plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="@Url.Content("~/Content/AdminLTE/")plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/moment/min/moment.min.js"></script>
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="@Url.Content("~/Content/AdminLTE/")plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="@Url.Content("~/Content/AdminLTE/")bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="@Url.Content("~/Content/AdminLTE/")dist/js/adminlte.min.js"></script> ';
	}

?>