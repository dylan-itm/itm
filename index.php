<!DOCTYPE html>
<html>
<head>
	<title>Practicas</title>
</head>
<body bgcolor="#BCF176">
<center>
<h1>Examen Practicas Supervisadas</h1>
			<form action="index.php" method="post">
				<input type="text" name="ctelefono" placeholder="Codigo de Telefono">
					<br><br>
				<input type="text" name="nombre" placeholder="Nombre del cliente">
						<br><br>
        		
        		<h2>Seleccione sus dispositivos</h2>
        			<br>
				<label>
                    <input type="checkbox" name="t1" value="iPhone"> Iphone
                    <br><input type="text" name="cantidadIphone" placeholder="Cantidad iPhone's">
                    	<br>
                    		<br>
                </label>
                <label>
                    <input type="checkbox" name="t2" value="Samsung"> Samsung
                    <br><input type="text" name="cantidadSamsung" placeholder="Cantidad Samsung's">
                    	<br>
                    		<br>
                </label>
                <label>
                    <input type="checkbox" name="t3" value="Huawei"> Huawei
                    <br><input type="text" name="cantidadHuawei" placeholder="Cantidad Huawei's">
                    	<br>
                    		<br>
                </label>
                <label>
                    <input type="checkbox" name="t4" value="Xahomi">Xahomi
                    <br>
                    <input type="text" name="cantidadxahomi" placeholder="Cantidad Xahomi's">
                    	<br>
                    		<br>
                </label>
                <label>
                    <input type="checkbox" name="t5" value="Gl">Gl
                    <br>
                    	 <input type="text" name="cantidadlg" placeholder="Cantidad LG's">
                    	<br>
                    		<br>
                </label>
                <label>
                    <input type="checkbox" name="t6" value="Alcatel">Alcatel
                    <br>
                     <input type="text" name="cantidadalcatel" placeholder="Cantidad Alcatel's">
                    	<br>
                </label>
                	<br><br>

                <h3>Seleccione su metodo de pago preferido</h3>
                <label>
                    <input type="radio" name="mpago" value="Efectivo">Pago en Efectivo
                </label>
                	<br>
                		<br>
                <label>
                    <input type="radio" name="mpago" value="VISA">Tarjeta VISA
                </label>
                	<br>
                		<br>
                <label>
                    <input type="radio" name="mpago" value="MasterCard">Tarjeta MasterCard
                </label>
                	<br>
                		<br>
				<input type="submit" name="btn" value="Registrar">
					<br>
						<br>
				<center><table border=1>
						<tr>
							<td>
								<center>
					
				<input type="text" name="Filtr" placeholder="Filtrar por Codigo">
					<br>
				<input type="submit" name="btn" value="Filtrar">
			</center>
				</td></tr>
        </table>
			</form>
	</center>
</body>
</html>

<?php 
include ("conexionitm.php");
	if (isset($_POST['btn'])) {
		
	$boton=$_POST['btn'];

//Boton para insertar datos

	if($boton=="Registrar"){
		$ctelefono=$_POST['ctelefono'];
		$nombre=$_POST['nombre'];
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$t3=$_POST['t3'];
		$t4=$_POST['t4'];
		$t5=$_POST['t5'];
		$t6=$_POST['t6'];
			$cantidadIphone=$_POST['cantidadIphone'];
			$cantidadSamsung=$_POST['cantidadSamsung'];
			$cantidadHuawei=$_POST['cantidadHuawei'];
			$cantidadxahomi=$_POST['cantidadxahomi'];
			$cantidadlg=$_POST['cantidadlg'];
			$cantidadalcatel=$_POST['cantidadalcatel'];
			$mpago=$_POST['mpago'];

//Calculos

			$p1=0;
			$p2=0;
			$p3=0;
			$p4=0;
			$p5=0;
			$p6=0;
			$cantidad_seleccionada=0;
			$descuento_cantidad=0;
			$descuento_parcial=0;
			$descuento_Mpago=0;
			$parcial=0;
			$subtotal=0;
			$total=0;

		if ($t1=="iPhone"){
			$p1=6500*$cantidadIphone;
			$cantidad_seleccionada++;
	}if ($t2=="Samsung"){
		$p2=4500*$cantidadSamsung;	
		$cantidad_seleccionada++;
	}		if ($t3=="Huawei"){
			$p3=2500*$cantidadHuawei;
			$cantidad_seleccionada++;

	}if ($t4=="Xahomi"){
		$p4=3700*$cantidadxahomi;
		$cantidad_seleccionada++;

	}		if ($t5=="Gl"){
			$p5=2800*$cantidadalg;
			$cantidad_seleccionada++;

	}if ($t6=="Alcatel"){
		$p6=2000*$cantidadalcatel;
		$cantidad_seleccionada++;
	}

//operaciones PARCIALES
	$parcial=$p1+$p2+$p3+$p4+$p5+$p6;

		if ($cantidad_seleccionada==2){
			$descuento_cantidad=$parcial*0.02;
		}		if ($cantidad_seleccionada==3){
			$descuento_cantidad=$parcial*0.03;
		}if ($cantidad_seleccionada==4){
			$descuento_cantidad=$parcial*0.04;
		}		if ($cantidad_seleccionada>=5){
			$descuento_cantidad=$parcial*0.05;
		}


			$subtotal=$parcial-$descuento_cantidad;

			if ($subtotal>2000 && $subtotal<4500){
				$descuento_parcial=$subtotal*0.1;
			}		if ($subtotal>=4500 && $subtotal<7000){
				$descuento_parcial=$subtotal*0.15;
			}		if ($subtotal>=7000){
				$descuento_parcial=$subtotal*0.2;
			}


			if ($mpago=="Efectivo"){
				$descuento_Mpago=$subtotal*0.07;
			}		if ($mpago=="VISA"){
				$descuento_Mpago=$subtotal*0.022;
			}		if ($mpago=="MasterCard"){
				$descuento_Mpago=$subtotal*0.035;
			}

//TOTALES

	$total=($subtotal-$descuento_parcial)-$descuento_Mpago;

//Insertar registro en base de datos

	$sql="insert into itm values ('$ctelefono','$nombre','$cantidadIphone','$cantidadSamsung','$cantidadHuawei','$cantidadxahomi','$cantidadlg','$cantidadalcatel','$cantidad_seleccionada','$parcial','$descuento_cantidad','$subtotal','$descuento_parcial','$descuento_Mpago','$total')";

		$consulta=mysqli_query($cn,$sql);
			if(!$consulta){
		echo "<script>alert('Datos No Insertados')</script>";
	}else{
		echo "<script>alert('Datos Insertados Corectamente')</script>";
	}
}

//Boton para filtrar registro

			if($boton=="Filtrar") {
				$Filtrar=$_POST['Filtr'];
		$sql="select*from itm where codigo_telefono like '%$Filtrar%' ";

		$wix=mysqli_query($cn,$sql);
			while ($row=mysqli_fetch_array($wix)) {
				echo "<center><table border=3><tr><td>";
				echo "Codigo Telefono = ".$row[0]."<br>";
				echo "Nombre = ".$row[1]."<br>";
				echo "Telefono 1 = ".$row[2]."<br>";
				echo "Telefono 2 = ".$row[3]."<br>";
				echo "Telefono 3 = ".$row[4]."<br>";
				echo "Telefono 4 = ".$row[5]."<br>";
				echo "Telefono 5 = ".$row[6]."<br>";
				echo "Telefono 6 = ".$row[7]."<br>";
				echo "Cantidad Telefonos = ".$row[8]."<br>";
				echo "Parcial = ".$row[9]."<br>";
				echo "Descuento por Cantidad = ".$row[10]."<br>";
				echo "Subtotal = ".$row[11]."<br>";
				echo "Descuento Subtotal = ".$row[12]."<br>";
				echo "Descuento por Metodo de Pago = ".$row[13]."<br>";
				echo "Total = ".$row[14]."<br>";
				echo "</center></table></tr><td>";
			}	
		}
	}
?>