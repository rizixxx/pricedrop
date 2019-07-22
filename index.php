<?php
$user='root';
$pass='';
$host='localhost';
$db = 'phpmyadmin';
if (! empty($_POST ) ){
	

	$mysqli = new mysqli($host, $user, $pass, $db);


	if ( $mysqli->connect_error ) {
		die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error);
	}
	if(isset($_POST["skroutz"])){
		$table = $_POST["schoice"];
		$sql = "INSERT INTO `$table` (`email`, `url`, `price`) VALUES
		('{$mysqli->real_escape_string($_POST['semailfield'])}', '{$mysqli->real_escape_string($_POST['surlfield'])}', '{$mysqli->real_escape_string($_POST['sprice'])}')";
		$insert = $mysqli->query($sql);
	}
	elseif (isset($_POST["plaisio"])) {
		$table = $_POST["pchoice"];
		$sql = "INSERT INTO `$table` (`email`, `url`, `price`) VALUES
		('{$mysqli->real_escape_string($_POST['pemailfield'])}', '{$mysqli->real_escape_string($_POST['purlfield'])}', '{$mysqli->real_escape_string($_POST['pprice'])}')";
		$insert = $mysqli->query($sql);
	}
	else{
		$table = $_POST["kchoice"];
		$sql = "INSERT INTO `$table` (`email`, `url`, `price`) VALUES
		('{$mysqli->real_escape_string($_POST['kemailfield'])}', '{$mysqli->real_escape_string($_POST['kurlfield'])}', '{$mysqli->real_escape_string($_POST['kprice'])}')";
		$insert = $mysqli->query($sql);
	}

	if ($insert){
		echo "";
	}
	else {
		die("Error: {$mysqli->errno} : {$mysqli->error}");
	}
	$mysqli->close();
}
	?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel='icon' href='fav2.ico' type='image/x-icon'>
	<title>Pricedrop</title>

</head>
<body  oncontextmenu="return false">
	<header style="position: relative;text-align: center;" class="header">
		<h1 style="display: inline;">PRICEDROP</h1>
		<hr style="width: 200px;">
		<p class="header-p" style="font-style: italic; margin-top:0;padding: 0;">get informed as soon as your item's price drop to the desired you set.</p>
	</header>
	<main class="content">
		<div class="row">
			
	  		<div class="column skroutz" value="skroutz" name="choice" style="background: rgba(113,213,252,0.6);">
	  			<div class="image">
	  				<img src="skroutz.png">
	  			</div>
	  			<div class="inputs" style="margin-top:-5%">
	  				<form action="" method="post" name="skroutz">
						<h3>Product URL : </h3>
						<input type="URL" name="surlfield" style="width:300px">
						<h3>Email : </h3>
						<input type="Email" name="semailfield" style="width:300px">
						<h3>Desired price : </h3>
						<input type="text" name="sprice" style="width:300px">
						<br><br><br>
						<input type="submit" class="button" name="skroutz" value="Submit">
						<select hidden name="schoice">
							<option>skroutz</option>
						</select>
	  				</form>
				</div>  			
	  		</div>

	  		<div class="column plaisio" style="background: rgba(142,135,139,0.6);">
	  			<div class="image" style="margin-top:3%">
	  				<img src="plaisio.png">
	  			</div>
	  			<div class="inputs" style="text-align: center;margin-top:-2%">
	  				<form action="" method="post" name="plaisio">
						<h3>Product URL : </h3>
						<input type="URL" name="purlfield" style="width:300px">
						<h3>Email : </h3>
						<input type="Email" name="pemailfield" style="width:300px">
						<h3>Desired price : </h3>
						<input type="text" name="pprice" style="width:300px">
						<br><br><br>
						<input type="submit" class="button" name="plaisio" value="Submit">
						<select hidden name="pchoice">
							<option>plaisio</option>
						</select>						
					</form>
				</div>
	  		</div>

	  		<div class="column kotsovolos" style="background:rgba(255,0,0,0.6);">
	  			<div class="image" style="margin-top:10%">
	  				<img src="kotsovolos.png">
	  			</div> 
	  			<div class="inputs" style="text-align: center;margin-top:11%">
	  				<form action="" method="post" name="kotsovolos">
						<h3>Product URL : </h3>
						<input type="URL" name="kurlfield" style="width:300px">
						<h3>Email : </h3>
						<input type="Email" name="kemailfield" style="width:300px">
						<h3>Desired price : </h3>
						<input type="text" name="kprice" style="width:300px">
						<br><br><br>
						<input type="submit" class="button" name="kotsovolos" value="Submit">
						<select hidden name="kchoice">
							<option>kotsovolos</option>
						</select>
					</form>
				</div>  			 			
	  		</div>  	
		</div>

		<br><br><br><br>
	</main>
	<footer class="footer">
		<div style="text-align: center;" class="foot">
			<br>
				<p class="footer-p">Copyright © 2019 Giorgos Rizikianos . All rights reserved. | website created for educational and non profit reasons.</p>
		</div>
	</footer>
</body>
</html>