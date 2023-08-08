<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratorio de Consultoría</title>
	<!--Bootstrap Css-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/styles.css?v8">
</head>
<body>

	<!--MENU-->
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="color: #000;">
			  	<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
			</svg>
		</label>
		<a href="#" class="enlace">
			<img src="assets/img/LADETH.png" alt="Logo LADETH" class="logo">
		</a>
		<ul>
			<li><a href="#home">Inicio</a></li>
			<li><a href="#about-us">Acerca de Nosotros</a></li>
			<li id="a-service"><a href="#services">Servicios</a></li>
			<li><a href="#contacto">Contacto</a></li>
			<li><a href="index.php?c=webpage&a=login" class="btnSesion">Iniciar Sesion</a></li>
		</ul>
	</nav>
	<!--INICIO-->
	<div class="container-fluid" style="background: #F8F9F9;" id="home">
		<section class="d-flex flex-column justify-content-center align-items-center">
			<h2 class="display-2 fw-bold p-5" style = "padding-top: 100px ;">LADETH</h2>
			<div class="row w-100">
				<div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column">
					<div class="tarjeta">
						<div class="d-flex align-items-center">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16" style="margin-right: 15px;">
  								<path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
								</svg>
							</div>
							<h3 class="pt-2">Misión</h3>
						</div>
						<p>Somos un Laboratorio de Desarrollo de Talento Humano que ofrece servicios de consultoría en el Área del Capital Humano a la comunidad estudiantil de la Universidad Tecnológica de Puebla, con el objetivo de satisfacer sus necesidades de formación en esta área para enfrentar el mundo laboral, a través de la integración de alumnos destacados de los programas educativos de Capital Humano que buscan la especialización de sus conocimientos mediante la práctica.</p>
					</div>
					<div class="tarjeta">
						<div class="d-flex align-items-center">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16" style="margin-right: 15px;">
							  	<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
							  	<path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
								</svg>
							</div>
							<h3 class="pt-2">Vision</h3>
						</div>
						<p>Ser un laboratorio de consultoría que pueda atender problemáticas relacionadas al Área del Capital Humano de la comunidad universitaria de la UTP y del sector empresarial, a través de la calidad, experiencia y profesionalismo de nuestros consultores, obteniendo con ello el reconocimiento a nivel estatal y nacional dentro del subsistema de Universidades Tecnológicas y Politécnicas.</p>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-sm-12">
					<h3 class="display-4">Valores</h3>
					<div class="row">
						<div class="col-xl-3 col-lg-12 bg-g1">
							<h3 class="pt-2">Respeto</h3>
							<p class="txt-w">Para LADETH es importante que entre consultores y clientes exista el respeto mutuo para generar una buena comunicación y convivencia.</p>
						</div>
						<div class="col-xl-3 col-lg-3 bg-w">
							<h3 class="pt-2">Constancia</h3>
							<p>Es importante que todo el equipo de LADETH tenga la fuerza que les motive para poder salir adelante y cumplir con todas las metas y objetivos del laboratorio.</p>
						</div>
						<div class="col-xl-3 col-lg-3 bg-g1">
							<h3 class="pt-2">Empatía</h3>
							<p class="txt-w">Cada consultor debe de tener la capacidad de comprender las necesidades del cliente, de escucharlos y brindar una solución efectiva para cumplir con sus expectativas.</p>
						</div>
						<div class="col-xl-3 col-lg-3 bg-w">
							<h3 class="pt-2">Cooperación</h3>
							<p>Para LADETH es fundamental el apoyo y trabajo en conjunto en la búsqueda de la mejora continua, a través de la aportación de todos sus miembros.</p>
						</div>
						<div class="col-xl-12 col-lg-3 bg-g1 mt-2">
							<h3 class="pt-2">Compromiso</h3>
							<p class="txt-w">Todo el equipo de LADETH tiene un compromiso con sus clientes en cumplir con todas las expectativas de resolución de las situaciones relacionadas con los temas de Capital Humano.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--ACERCA DE NOSOTROS-->
	<div class="container-fluid mt-5" id="about-us">
		<section class="container d-flex flex-column justify-content-center align-items-center">
			<h2 class="display-2 fw-bold">Nuestra Historia</h2>
			<p><span class="txt1">LADETH</span> surgió como la idea de un proyecto generado por los docentes de la <span class="txt1">División de Negocios</span>, quienes identificaron que el <span class="txt1">Programa Educativo de Capital Humano</span> es la única carrera que no cuenta con un laboratorio de prácticas, a partir de esta necesidad la <span class="txt2">Mtra. Noemí Rojas Terrazas</span> realizó una propuesta que involucra tanto a docentes como estudiantes de la carrera, la cual consiste en desarrollar un laboratorio que brinde servicios de consultoría a la comunidad estudiantil de la <span class="txt1">Universidad Tecnológica de Puebla</span>, a fin de que los estudiantes del <span class="txt1">P.E. de Capital Humano</span> fortalezcan sus conocimientos y adquieran experiencia en el área. <br>
			<img src="assets/img/img2.jpg" alt="Escuela UTP" class="img-about mt-5">
			Con la valiosa colaboración de las <span class="text2">Mtras. María Isabel Rodallegas Ramos y Noemí Rojas</span> reclutan alumnos del <span class="txt1">Área de Capital Humano</span> quienes se encontraban en proceso de iniciar sus estadías a nivel licenciatura, para involucrarse en el desarrollo del laboratorio y aplicación de los conocimientos adquiridos en los <span class="txt1">P. E. de Capital Humano</span>.
			Al equipo se suman las <span class="txt2">Maestras Oliva Sánchez Mendieta y Mercedes Verónica Martell Zulbaran</span> quienes con su gran experiencia en profesional, agregan valor a las actividades de este proyecto.
			</p>
		</section>
	</div>
	<!--SERVICIOS-->
	<div class="container-fluid" style="background: #F8F9F9;" id="services">
		<section class="d-flex flex-column justify-content-center align-items-center">
			<h2 class="display-2 fw-bold p-5">Servicios</h2>
			<div>
				<table class="table">
					<thead>
					    <tr>
					        <th class="text-center" style="background: #5fc861; color:#fff;" scope="row">Area</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Desarrolo profesional</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Cultura corporal</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Diseño organizacional</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Reclutamiento y selección de personal</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Evaluación del desempeño</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Desarrollo y crecimiento del personal</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Capacitación de personal</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Legislación laboral</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Sueldos y salarios</th>
					      	<th class="text-center" style="background: #5fc861; color:#096a46;">Higiene y seguridad laboral</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
					      <th class="text-center" style="background: #5fc861; color:#fff;" scope="row">Tema</th>
						    <td>
							   	<ol>
						    		<li class="txt-table">Diseño de CV</li>
						      		<li class="txt-table">Diseño de cartas de presentación</li>
						      		<li class="txt-table">Código de vestimenta para una entrevista de trabajo</li>
						      		<li class="txt-table">Reglas de comportamiento en una entrevista de trabajo</li>
						      	</ol>
						    </td>
						    <td>
						     	<ol start="5">
						     		<li class="txt-table">Diagnóstico de clima organizacional</li>
						      		<li class="txt-table">Plan de clima organizacional</li>
						      		<li class="txt-table">Diagnóstico de cultura organizacional</li>
						      		<li class="txt-table">Plan de cultura organizacional</li>
						      	</ol>
						    </td>
						     <td>
						      	<ol start="9">
						      		<li class="txt-table">Creación de la estructura organizacional</li>
						      		<li class="txt-table">Análisis de puestos</li>
						      		<li class="txt-table">Diseño de  puestos</li>
						      		<li class="txt-table">Elaboración de manuales de organización</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="13">
						      		<li class="txt-table">Proceso de reclutamiento</li>
						      		<li class="txt-table">Proceso de assessment</li>
						      		<li class="txt-table">Proceso de selección de personal</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="16">
						      		<li class="txt-table">Proceso de evaluación del desempeño</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="17">
						      		<li class="txt-table">Inducción laboral</li>
						      		<li class="txt-table">Alineación del personal con la filosofía de la empresa</li>
						      		<li class="txt-table">Indicadores de desempeño laboral</li>
						      		<li class="txt-table">Planes de desarrollo y carrera</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="21">
						      		<li class="txt-table">Diagnóstico de necesidades de capacitación</li>
						      		<li class="txt-table">Plan de capacitación</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="23">
						      		<li class="txt-table">Contrato laboral</li>
						      		<li class="txt-table">Prestaciones básicas</li>
						      		<li class="txt-table">Rescisiones de trabajo</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="26">
						      		<li class="txt-table">Cálculo de nómina</li>
						      		<li class="txt-table">Vacaciones</li>
						      		<li class="txt-table">Utilidades</li>
						      		<li class="txt-table">Aguinaldo</li>
						      		<li class="txt-table">Finiquito</li>
						      		<li class="txt-table">Requisitos para el trámite de la e-firma</li>
						      	</ol>
						    </td>
						    <td>
						      	<ol start="32">
						      		<li class="txt-table">Identificación de riesgos y enfermedades de trabajo</li>
						      		<li class="txt-table">Tipos y cálculo-2 de incapacidades</li>
						      	</ol>
						    </td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</div>
	<!--CONTACTO-->
	<div class="container-fluid" id="contacto">
		<section class="d-flex flex-column justify-content-center align-items-center">
			<h2 class="display-2 fw-bold p-5">Contactanos</h2>
			<div class="contacto">
				<img src="assets/img/LADETH.png" alt="logo" class="w-100">
				<h3 class="text-center">Laboratorio de Desarrollo de Talento Humano</h3>
				<p class="text-center">Antiguo Camino a la Resurección No. 1002-A Zona Industrial Puebla Oriente, Pue.Mexico CP72300</p>
				<p class="text-center">Edificio docencia No 1/Laboratorio D-1/PA | <a href="index.php?c=webpage&a=policies">Políticas</a></p>
				<div class="row d-flex">
					<div class="col-md-6 col-sm-12 d-flex justify-content-center">
						<label class="d-flex align-items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
		  						<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
							</svg>
							<p class="ml-15">division.negocios@utpuebla.edu.mx</p>
						</label>
					</div>
					<div class="col-md-6 col-sm-12 d-flex justify-content-center">
						<label class="d-flex align-items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
		  						<path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
		  						<path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
							</svg>
							<p class="ml-15">Teléfono: (222) 309-88-25 Ext. 2125</p>
						</label>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!--Bootstrap Js-->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>




