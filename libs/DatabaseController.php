<?php
	require_once("MysqlConnectionConf.php");
	require_once("../DataModels/DataModels.php");

function Login($username , $password){

	$conn = ConnectToDatabase();
    $stmt = $conn->prepare("SELECT * FROM User where username='".$username."' and password='".$password."'"); 
    $stmt->execute();
    $user = null;
    while ($col = $stmt->fetch()) {
    	$user = new UserDataModel($col['username']);
    	$user->username = $col['username'];
  	}
  	if(!is_null($user)){
  		
  		echo $user->username;

  		//Location 
  		header("Location: ../pages/Dashboard.php");
  	}else{
      echo "<h1>Hatalı Giriş</h1>";
    }

  
}
?>