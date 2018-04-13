<!DOCTYPE html>
<html lang="en">
<head>
	<title>Datos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
   <?php
   $matricula=$_POST['matricula'];
   $appat=$_POST['apellidop'];
   $apmat=$_POST['apellidom'];
   $nombre=$_POST['nombre'];
  ?>
<table>
	<?php
	
	  ?>
	  <tr>
	  <td  width="100"><?php echo "".$matricula;?></td>
	  <td  width="100"><?php echo "".$appat;?></td>
	  <td  width="100"><?php echo "".$apmat;?></td>
	  <td  width="100"><?php echo "".$nombre;?></td>
	 
	  </tr>
	

</table>
</body>
</html>