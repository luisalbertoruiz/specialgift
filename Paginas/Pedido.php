<?php	
	if(empty($_POST['articulo']))
	{
		$articulo="Personalizado";
		$bebidas=$_POST['coffe'];
		$vinos=$_POST['vino'];
		$flores=$_POST['flor'];
		$tasas=$_POST['tasa'];
		$mantel=$_POST['mantel'];
		$adicionales=$_POST['ad'];
	}
	else
	{
		$articulo=$_POST['articulo'];
	}
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
				<h2>Pedido</h2><br><br>
				<h3><?PHP echo $articulo ?></h3><br>
				<div id="divbr"></div>
				<form method="post" action="rpedido.php" name="frmpedido">
					<div id="cont">
						<div id="cont5">
							<h4>TUS DATOS</h4><br>
							<input type="text" name="nomE" id="nomE">
							<label for="nomE">Tu Nombre:</label><br><br>
							<input type="text" name="telE" id="telE">
							<label for="telE">Tu Teléfono:</label><br><br>
							<input type="text" name="celE" id="celE">
							<label for="celE">Tu Celular:</label><br><br>
							<input type="email" name="emailE" id="emailE">
							<label for="emailE">Tu eMail:</label><br><br><br>
						</div>
					</div>
					<div id="divbr"></div>
					<div id="cont">
						<div id="cont5">
							<h4>SUS DATOS</h4><br>
							<input type="text" name="nomR" id="nomR">
							<label for="nomR">Quien Recibe:</label><br><br>
							<input type="text" name="telR" id="telR">
							<label for="telR">Su Teléfono:</label><br><br>
							<input type="text" name="celR" id="celR">
							<label for="celR">Su Celular:</label><br><br>
							<input type="email" name="emailR" id="emailR">
							<label for="emailR">Su eMail:</label><br><br><br>
						</div>
					</div>
					<div id="divbr"></div>
					<div id="cont">
						<div id="cont5">
					<h4>DETALLES</h4><br>
					<input type="date" name="date" id="date">
					<label for="date">Fecha de Envio:</label><br><br>
					<input type="text" name="calle" id="calle">
					<label for="calle">Calle y No.:</label><br><br>
					<input type="text" name="col" id="col">
					<label for="col">Colonia:</label><br><br>
					<select id="local" name="local" required>
							<option></option>
							<option>Distrito Federal</option>
							<option>Edo. de México</option>
					</select><label for="local">Localidad:</label><br><br>
					<input type="text" name="ref" id="ref">
					<label for="ref">Referencia:</label><br><br>
					<textarea id="mensaje" name="mensaje" cols="23" rows="9" maxlength="200"></textarea>
					<label for="mensaje">Mensaje:</label><br><br><br><br><br><br><br>
					<input type="submit" value="Realizar"><br><br><br><br>
					<input type="hidden" value="<?php echo $articulo ?>" name="articulo">
					<input type="hidden" value="<?php echo $bebidas ?>" name="bebidas">
					<input type="hidden" value="<?php echo $vinos ?>" name="vinos">
					<input type="hidden" value="<?php echo $flores ?>" name="flores">
					<input type="hidden" value="<?php echo $tasas ?>" name="tasas">
					<input type="hidden" value="<?php echo $mantel ?>" name="mantel">
					<input type="hidden" value="<?php echo $adicionales ?>" name="adicionales">
						</div>
					</div>
				</form>
			</section>
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