<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		h1 {
			color: white;
			font-size: 50px;
			margin-left: 20px;
		}
		
		body {
			margin: 0;
			padding: 0;
			overflow: hidden;
		}

		header {
			background-color: #297a38;
			font-size: 30px;
			padding: 30px;
			color: white;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		form {
			text-align: right;
			margin: 0;
			display: flex;
			align-items: center;
		}

		button {
			font-size: 30px;
		} 
		
		.login {
			margin-right: 20px;
		}
		
		a {
			text-decoration: none;
			color: white;
			font-family: Arial;
		}

		
		#skyline_milano {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			min-width: 100%;
			min-height: 100%;
			width: auto;
			height: auto;
			z-index: -1;
			filter: blur(4px) brightness(0.7);
		}
		.content {
			position: relative;
			z-index: 1;
			color: white;
			text-align: center;
			padding: 20px;
		}

	</style>
</head>
<body style="text-align:center">
	<header>
		<a href="https://www.regione.lombardia.it/wps/portal/istituzionale/">
			<img src="icona_lombardia.png" style="width:235px; height:75px;">
		</a>
		<a href="calendario.php">Calendario eventi</a>
		
	</header>

	<video autoplay muted loop id="skyline_milano">
		<source src="skyline_milano.mp4" type="video/mp4">
	</video>
	
</body>
</html>