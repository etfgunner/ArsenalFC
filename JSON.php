<!DOCTYPE html>
<?php
$error=false;
session_start();
if(!file_exists('users/'.$_SESSION['username'].'.xml')){
	header('Location: login.php');
	die;
}
if(isset($_POST['change'])){
	$username=$_POST['username'];
	$new=md5($_POST['c_password']);
	/*
	if(file_exists('users/' . $username . '.xml')){
			$xml= new SimpleXMLElement('<user></user>');
			$xml->addChild('username', $username);
			$xml->addChild('password', $new);
			$xml->asXML('users/'.$username.'.xml');
			header('Location:LoginAdministrator.php');
			die;
	}*/
	
	$dbh= new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "milan", "Prazina1");
		$upit = $dbh->prepare("UPDATE login SET password=? WHERE username=?");
		$upit->bindValue(1, $new, PDO::PARAM_STR);
		$upit->bindValue(2, $username, PDO::PARAM_STR);
		$upit->execute();
		header('Location:LoginAdministrator.php');
			die;
	$error=true;
}
?>
<html>
  <head>
    <title>Arsenal FC</title>
    <meta charset=utf-8>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="json.js"></script>
	<div class="header">
			<div class="logo"></div>
			<div class="main_menu">
              <ul class="topmenu" id="menu">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="first_team.php">First Team</a></li>
  <li><a href="league_table.php">League Table</a></li>
  <li><a href="history.php">History</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="showMenu()">☰</a>
  </li>
</ul>
<a href="registration.php" class="login">login/register</a>
            </div>  
				
	</div>
	<form method="get" action="dajJSON.php">
	
	<p>String za poređenje: <input type="text" name="upit"></p>
	<p><input type="submit" name="change" value="Kreiraj JSON"></p>
	</form>
	<a href="LoginAdministrator.php">Go to home</a>
	<a href="logout.php">Logout</a>
	<SCRIPT src = "hambutton.js" ></SCRIPT>
	
  </body>
</html>