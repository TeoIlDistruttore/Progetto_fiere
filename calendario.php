<!DOCTYPE html>
<html>
	<style>
    h1 {
			color: white;
			font-size: 50px;
			margin-left: 20px;
      font-family: Arial;
		}
		
		body {
			margin: 0;
			padding: 0;
			overflow: hidden;
      text-align: center;
		}

		header {
			background-color: #297a38;
			font-size: 30px;
			padding: 30px;
			color: white;
			display: flex;
			justify-content: space-between;
			align-items: center;
      font-family: Arial;
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

</style>
<header>
    <a href="https://www.regione.lombardia.it/wps/portal/istituzionale/">
			<img src="icona_lombardia.png" style="width:235px; height:75px;">
		</a>
		Calendario Eventi
    <a href="pagina.php">Pagina iniziale</a>

	</header>
<body>
  <br><br>
  <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&ctz=Europe%2FRome&bgcolor=%23ffffff&showTitle=0&showPrint=0&showTz=0&src=aXQuaXRhbGlhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "progetto_fiere";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
      die("Connessione al database fallita: " . mysqli_connect_error());
    }

    $url = "https://www.dati.lombardia.it/resource/hs8z-dcey.json";
    $data = file_get_contents($url);
    $dataArray = json_decode($data, true);


    foreach ($dataArray as $item){

      // PROVINCIA
      $provincia = isset($item['prov']) ? mysqli_real_escape_string($conn, $item['prov']) : "NULL";
	  $query = "SELECT * FROM PROVINCIA WHERE nome = 'provincia'";
	  $result = mysqli_query($conn, $query);
	  if(mysqli_num_rows($result) === 0){
		$query = "INSERT INTO 'provincia' ('id', 'provincia' VALUES (NULL, '$provincia'); ";
		$result = mysqli_query($conn, $query);
	  }

    }
  ?>


  </body>
</html>