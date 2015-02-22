<?php
	$buscar=$_POST['busq'];
	include("../PHP/Conexion.php");
	$result=mysql_query("SELECT * FROM regalos WHERE rel01 LIKE '%$buscar%' OR rel02 LIKE '%$buscar%' OR rel03 LIKE '%$buscar%' OR rel04 LIKE '%$buscar%' OR rel05 LIKE '%$buscar%'", $connect);
	$total=mysql_num_rows($result);
?>
<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Special Gift</title>
		<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
		<script type="text/javascript" src="../JS/script.js">var isIE = '-ms-scroll-limit' in document.documentElement.style && '-ms-ime-align' in document.documentElement.style;</script>
		<meta charset="utf-8">
	</head>
	<body>
		<div id="contenedor">
		<header>
			<a href="../index.html"><img src="../Recursos/logo003.png" id="nombre"></a>
			<a href="../index.html"><img src="../Recursos/caja.png" id="logo01"></a>
			<a href="http://www.facebook.com/specialgiftoficial"><img src="../Recursos/fb.png" id="fb"></a>
			<a href="https://twitter.com/_SpecialGift"><img src="../Recursos/tw.png" id="tw"></a>
			<a href="Empresa/Contacto.html"><img src="../Recursos/contc.png" id="contc"></a>
			<a href="Arma.html" title="Arma tu SG"><img src="../Recursos/armasg.png" id="armasg"></a>
			<div class="divisor"></div>
			<form method="post" name="frm" action="Buscar.php">
			<input type="image" src="../Recursos/barra.png" id="buscar">
			<input type="text" id="buscarb" name="busq" required>
			</form>
		</header>
			<nav>
				<ul>
					<li><a href="../index.html">INICIO</a></li>
					<li><a href="Desayunos.html">DESAYUNOS</a></li>
					<li><a href="Vinos.html">VINOS</a></li>
					<li><a href="Especiales.html">ESPECIALES</a></li>
					<li><a href="Bebes.html">BEBES</a></li>
					<li><a href="Fluches.html">FLUCHES</a></li>
				</ul>	
			</nav>
			<section>
				<h2>Resultados</h2>
				<table>
				<?php
					if($total < 1){
						echo "<h4>no se encontraron resultados</h4>";
					}
					else
					{
						while ($busq=mysql_fetch_array($result)) {
						echo "<tr>";
						echo "<td>"."<a href='".$busq['link']."'>".$busq['rel01']."</a>"."</td>";
						echo "<td>"."<a href='".$busq['link']."'>"."<img src='".$busq['img']."'"."</a>"."</td>";
						echo "</tr>";
						}
					}
				?>
				</table>
			</section>
			<a href=""></a>
			<aside>
				<div class="dtsEmp">
					<p>POR QUE SIEMPRE HAY UN MOMENTO ESPECIAL</p>
				</div>
			</aside>
			<aside>
				<div class="dtsEmp">
					<ul>
						<li><a href="Empresa/Nosotros.html">Nosotros</a></li>
						<li><a href="Empresa/Mision.html">Misión</a></li>
						<li><a href="Empresa/Vision.html">Visión</a></li>
						<li><a href="Empresa/Valores.html">Valores</a></li>
						<li><a href="Empresa/Organigrama.html">Organigrama</a></li>
						<li><a href="Empresa/Contacto.html">Contacto</a></li>
						<li><a href="Empresa/Politicas.html">Políticas</a></li>	
					</ul>					
				</div>
			</aside>
			<footer>
				<p>Todos los regalos son especiales y diferentes, diseñados y hechos para cada persona que los recibe, puede tener variaciones en productos respetando el contenido y servicios que te ofrecemos.</p>
				<p>Los contenidos (especialmente los datos, la información, las ilustraciones, los logotipos, las fotografías, el audio, los vídeos, etc.) que aparecen o que están disponibles en esta web están protegidos en razón del derecho de autor y de otros derechos de propiedad intelectual y son propiedad exclusiva de Special Gift. Cualquier copia, reproducción, representación, alteración, difusión, adaptación, modificación, integral o parcial, del contenido de esta página web es ilícita.</p>
				<div class="des">
					<p>desarrollado por XOLOTSOFT</p>

				</div>
				<img src="../Recursos/XOLOTSOFT02.png">
			</footer>
		</div>
	</body>
</html>