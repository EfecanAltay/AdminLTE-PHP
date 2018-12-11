
<?php
require_once("../libs/libs.php");
require_once("../libs/DatabaseController.php");

if(isset($_POST['isLogin'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	Login($username,$password);
}

?>

<html>
	<head>
		<title>Login</title>
	</head>
	<style type="text/css">
		body{
			padding: 0px;
			width: 100%;
			position: absolute;
			background: gray;
			margin: 0px;
		
		}
		#form_panel{
			width: 30%;	
			margin: 15% auto;
		}
		#socialMediaButtons{
			position: absolute;
			width: 40%;
			margin: 0px 30%;
			
		}
	</style>
	<body>
		<form class="ui form" method="POST" >
			<div id="form_panel">
			<div class="ui blue attached segment">
				  <div class="field">
				    <label>First Name</label>
				    <input type="text" name="username" placeholder="First Name" required/>
				  </div>
				  <div class="field">
				    <label>Last Name</label>
				    <input type="text" name="password" placeholder="Last Name" required/>
				  </div>
			</div>
			<button type="submit" name="isLogin" tabindex="0" value="Login" class="ui bottom attached button blue" >login </button>	
			</div>
		</form>
		</div>
		<?php
		socialMediaButtons();
		?>
	</body>
</html>

<?php


function LoginPanel(){

	echo "";
}
?>