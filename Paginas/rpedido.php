<?php
	$articulo=$_POST['articulo'];
	include("../PHP/Conexion.php");
	if($articulo != "Personalizado"){
		$to ="ventas.specialgift@outlook.com";
		$headers = "Content-Type: text/html; charset=utf-8\n"; 
		$headers .= "From: Pedido"."\r\n";            
		$tema="Pedido ".$_POST['articulo'];
		$mensaje="
			<table border='0' cellspacing='2' cellpadding='2'>
			<tr>
			    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Datos de quien envia</strong></td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
			    <td width='80%' align='left'>$_POST[nomE]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Telefono:</strong></td>
			    <td width='80%' align='left'>$_POST[telE]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Celular:</strong></td>
			    <td width='80%' align='left'>$_POST[celE]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
			    <td align='left'>$_POST[emailE]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cfffcc'><strong>Datos de quien recibe</strong></td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cfffcc'><strong>Nombre:</strong></td>
			    <td width='80%' align='left'>$_POST[nomR]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cfffcc'><strong>Telefono:</strong></td>
			    <td width='80%' align='left'>$_POST[telR]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cfffcc'><strong>Celular:</strong></td>
			    <td width='80%' align='left'>$_POST[celR]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cfffcc'><strong>E-mail:</strong></td>
			    <td align='left'>$_POST[emailR]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cce9ff'><strong>Datos de envio</strong></td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Fecha:</strong></td>
			    <td align='left'>$_POST[date]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Calle:</strong></td>
			    <td align='left'>$_POST[calle]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Colonia:</strong></td>
			    <td align='left'>$_POST[col]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Localidad:</strong></td>
			    <td align='left'>$_POST[local]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Referencia:</strong></td>
			    <td align='left'>$_POST[ref]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Mensaje:</strong></td>
			    <td align='left'>$_POST[mensaje]</td>
			  </tr>
			</table>
		";
		@mail($to,$tema,$mensaje,$headers); 
	     $mensaje= "En un momento nos comunicaremos contigo para confirmar tu pedido";
	     $mensaje2= "Felicidades";
	} 
    else {
       $to ="ventas.specialgift@outlook.com";
		$headers = "Content-Type: text/html; charset=utf-8\n"; 
		$headers .= "From: Pedido"."\r\n";            
		$tema="Pedido ".$_POST['articulo'];
		$mensaje="
			<table border='0' cellspacing='2' cellpadding='2'>
			<tr>
			    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Datos de quien envia</strong></td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
			    <td width='80%' align='left'>$_POST[nomE]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Telefono:</strong></td>
			    <td width='80%' align='left'>$_POST[telE]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Celular:</strong></td>
			    <td width='80%' align='left'>$_POST[celE]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
			    <td align='left'>$_POST[emailE]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cfffcc'><strong>Datos de quien recibe</strong></td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cfffcc'><strong>Nombre:</strong></td>
			    <td width='80%' align='left'>$_POST[nomR]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cfffcc'><strong>Telefono:</strong></td>
			    <td width='80%' align='left'>$_POST[telR]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cfffcc'><strong>Celular:</strong></td>
			    <td width='80%' align='left'>$_POST[celR]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cfffcc'><strong>E-mail:</strong></td>
			    <td align='left'>$_POST[emailR]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#cce9ff'><strong>Datos de envio</strong></td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Fecha:</strong></td>
			    <td align='left'>$_POST[date]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Calle:</strong></td>
			    <td align='left'>$_POST[calle]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Colonia:</strong></td>
			    <td align='left'>$_POST[col]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Localidad:</strong></td>
			    <td align='left'>$_POST[local]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Referencia:</strong></td>
			    <td align='left'>$_POST[ref]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#cce9ff'><strong>Mensaje:</strong></td>
			    <td align='left'>$_POST[mensaje]</td>
			  </tr>
			  <tr>
			    <td width='20%' align='center' bgcolor='#FFCCCC'><strong>Datos de paquete</strong></td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#FFCCCC'><strong>Mensaje:</strong></td>
			    <td align='left'>$_POST[bebidas]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#FFCCCC'><strong>Mensaje:</strong></td>
			    <td align='left'>$_POST[vinos]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#FFCCCC'><strong>Mensaje:</strong></td>
			    <td align='left'>$_POST[flores]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#FFCCCC'><strong>Mensaje:</strong></td>
			    <td align='left'>$_POST[tasas]</td>
			  </tr>
			  <tr>
			    <td align='center' bgcolor='#FFCCCC'><strong>Mensaje:</strong></td>
			    <td align='left'>$_POST[mantel]</td>
			  </tr>
			</table>
		";
		@mail($to,$tema,$mensaje,$headers); 
	     $mensaje= "En un momento nos comunicaremos contigo para confirmar tu pedido";
	     $mensaje2= "Felicidades";
        } 
?>
<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Special Gift</title>
		<link rel="stylesheet" type="text/css" href="../../CSS/estilo.css">
		<script type="text/javascript" src="../../JS/script.js"></script>
		<meta charset="utf-8">
	</head>
	<body>
		<div id="contenedor">
		<header>
			<a href="../../index.html"><img src="../../Recursos/logo003.png" id="nombre"></a>
			<a href="../../index.html"><img src="../../Recursos/caja.png" id="logo01"></a>
			<a href="http://www.facebook.com/specialgiftoficial"><img src="../../Recursos/fb.png" id="fb"></a>
			<a href="https://twitter.com/_SpecialGift"><img src="../../Recursos/tw.png" id="tw"></a>
			<a href="Contacto.html"><img src="../../Recursos/contc.png" id="contc"></a>
			<a href="Arma.html" title="Arma tu SG"><img src="../../Recursos/armasg.png" id="armasg"></a>
			<div class="divisor"></div>
			<form method="post" name="frm" action="../Buscar.php">
			<input type="image" src="../../Recursos/barra.png" id="buscar">
			<input type="text" id="buscarb" name="busq" required>
			</form>
		</header>
			<nav>
				<ul>
					<li><a href="../../index.html">INICIO</a></li>
					<li><a href="../Desayunos.html">DESAYUNOS</a></li>
					<li><a href="../Vinos.html">VINOS</a></li>
					<li><a href="../Especiales.html">ESPECIALES</a></li>
					<li><a href="../Bebes.html">BEBES</a></li>
					<li><a href="../Fluches.html">FLUCHES</a></li>
				</ul>	
			</nav>
			<section>
			<h2><?php echo $mensaje2 ?></h2>
				<p><?php echo $mensaje ?></p>
			</section>
			<aside>
				<div class="dtsEmp">
					<p>POR QUE SIEMPRE HAY UN MOMENTO ESPECIAL</p>
				</div>
			</aside>
			<aside>
				<div class="dtsEmp">
					<ul>
						<li><a href="Nosotros.html">Nosotros</a></li>
						<li><a href="Mision.html">Misión</a></li>
						<li><a href="Vision.html">Visión</a></li>
						<li><a href="Valores.html">Valores</a></li>
						<li><a href="Organigrama.html">Organigrama</a></li>
						<li><a href="Contacto.html">Contacto</a></li>
						<li><a href="Politicas.html">Políticas</a></li>	
					</ul>
				</div>
			</aside>
			<footer>
				<p>Todos los regalos son especiales y diferentes, diseñados y hechos para cada persona que los recibe, puede tener variaciones en productos respetando el contenido y servicios que te ofrecemos.</p>
				<p>Los contenidos (especialmente los datos, la información, las ilustraciones, los logotipos, las fotografías, el audio, los vídeos, etc.) que aparecen o que están disponibles en esta web están protegidos en razón del derecho de autor y de otros derechos de propiedad intelectual y son propiedad exclusiva de Special Gift. Cualquier copia, reproducción, representación, alteración, difusión, adaptación, modificación, integral o parcial, del contenido de esta página web es ilícita.</p>
				<div class="des">
					<p>desarrollado por XOLOTSOFT</p>

				</div>
				<img src="../../Recursos/XOLOTSOFT02.png">
			</footer>
		</div>
	</body>
</html>