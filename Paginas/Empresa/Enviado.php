<?php
if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['asunto'])){
	$to ="ventas.specialgift@outlook.com";
	$headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
	$headers .= "From:".$_POST['nom']."\r\n";            
	$tema="Contacto desde el Sitio Web";
	$mensaje="
		<table border='0' cellspacing='2' cellpadding='2'>
		  <tr>
		    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
		    <td width='80%' align='left'>$_POST[nom]</td>
		  </tr>
		  <tr>
		    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
		    <td align='left'>$_POST[email]</td>
		  </tr>
		   <tr>
		    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Asunto</strong></td>
		    <td width='80%' align='left'>$_POST[asunto]</td>
		  </tr>
		  <tr>
		    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Localidad</strong></td>
		    <td width='80%' align='left'>$_POST[local]</td>
		  </tr>
		  <tr>
		    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Edad</strong></td>
		    <td width='80%' align='left'>$_POST[edad]</td>
		  </tr>
		  <tr>
		    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Sexo</strong></td>
		    <td width='80%' align='left'>$_POST[sex]</td>
		  </tr>
		  <tr>
		    <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
		    <td align='left'>$_POST[mensaje]</td>
		  </tr>
		</table>
	";
	@mail($to,$tema,$mensaje,$headers); 
     $mensaje= "Gracias por sus comentarios.";
        } else {
           $mensaje="No se puede enviar el formulario, verifica los campos";
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
			<a href="../Arma.html" title="Arma tu SG"><img src="../../Recursos/armasg.png" id="armasg"></a>
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
			<h2>Enviado</h2>
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