<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
	<!--Alumno: Jan Pierre Benites Camacho-->
	<!--pcsijcuy@upc.edu.pe-->
</head>
<body>
	<div align=center>
		<img align="center" src='images/portada.PNG'>
	</div>
	
	<?php
					$servername = "us-cdbr-iron-east-03.cleardb.net";
					$username = "bb6f44d346cfdd";
					$password = "dd291230";
					$dbname = "ad_7f4124b1259bcb4";
					// Create connection
					$conn = new mysqli($servername,$username,$password,$dbname);
					// Check connection
					if ($conn->connect_error) {
					die("Connection failed: ". $conn->connect_error);
					}
					
	?>
	<table>
		<tr>
			<td width="610">
				<table width="600"><tr>
					<h1>For data scientists</h1>
					<table>
					<?php
					$sql = "SELECT * from pc1_cloud where codigo_servicio='C001' or codigo_servicio='C002' or codigo_servicio='C003'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {?>
						<tr >
							<td width="140"><img width=130 align="center" src='images/iconos/<?php echo $row['imagen_servicio']?>'></td>
							<td width="420"><b><?php echo $row['nombre_servicio']?></b><br><?php echo $row['descripcion_servicio']?></td>
						</tr>
					<?php }
					} else {
					echo "0 results";
					}
					?> 
					</tr></table>
				</table>
			</td>
			<td width="610">
				<div width="600"><tr>
					<h1>For data scientists</h1>
					<table>
					<?php
					$sql = "SELECT * from pc1_cloud where codigo_servicio='C004' or codigo_servicio='C005' or codigo_servicio='C006'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {?>
						<tr >
							<td width="140"><img width=130 align="center" src='images/iconos/<?php echo $row['imagen_servicio']?>'></td>
							<td width="420"><b><?php echo $row['nombre_servicio']?></b><br><?php echo $row['descripcion_servicio']?></td>
						</tr>
					<?php }
					} else {
					echo "0 results";
					}
					$conn->close();
					?> 
					</tr></table>
				</div>
			</td>
		</tr>
	</table>
	<div align=center>
		<img align="center" src='images/fin.PNG'>
	</div>
</body>
</html>
