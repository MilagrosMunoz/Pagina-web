<?php
	include ("header.php");
?>	
<section>

	<div id="container-module-slider">
		<img src="images/banner.jpg" alt="" class="imagenanimate"/>
		<div class="layer-slider">
			<h1>DISEÑO Y CREACIÓN DE SITIOS WEB</h1>
			<h2>Deseas contar con una página web o tienda virtual que te ayuden a incrementar tus ventas?</h2>
			<a href="" class="btn-slider">
				<span id="span1"></span>
				<span id="span2"></span>
				<span id="span3"></span>
				<span id="span4"></span>
				CONTÁCTANOS
			</a>
		</div>
	</div>
	
	<div id="container-module-content">
		<img src="images/fondoIdea.jpg" alt="" />
		<div class="row-content">
			<div>
				<h2>Tengo una idea digital</h2>
				<h3>¿Por qué elegirnos?</h3>
				<ul>
					<li>Más de cien proyectos desarrollados.</li>
					<li>Comunicación 24/7.</li>
					<li>Programación de vanguardia.</li>
				</ul>
			</div>
			<div>
				<h2>Tengo un proyecto en riesgo... ¡necesito ayuda!</h2>
				<h3>¿Por qué confiar en nosotros?</h3>
				<ul>
					<li>Asumimos cualquier tipo de proyecto.</li>
					<li>Metodologías ágiles de desarrollo.</li>
					<li>Equipo completo de especialistas en cada rama.</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="container-module-box">
		<div class="center">
			<div class="row-box">
				<div class="title-box">
					<h2>Listo para</h2>
					<p> que todos te conozcan</p>
				</div>
				<div class="content-box">
					<ul>
						<li>
							<a href="">
								<div class="text-box">
									<h3>Desarrollo de Proyectos Web</h3>
									<h4>Páginas Web / E-commerce / Landing</h4>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="text-box">
									<h3>Soluciones App Mobile</h3>
									<h4>Android & iOS</h4>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="text-box">
									<h3>Sistemas Web</h3>
									<h4>Intranets / CRM / Monitoreo / Mapas</h4>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="text-box">
									<h3>Servicios en la Nube</h3>
									<h4>Hosting / Dominios / Cloud Service</h4>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="text-box">
									<h3>Imagen Corporativa</h3>
									<h4>Seo / Sem</h4>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="container-module-us">
		<div class="center">
			<div class="row-us">
				<div class="content-us">
					<h2>Personalizamos soluciones digitales a medida</h2>
					<p>Somos una Startup que cuenta con un equipo de jóvenes emprendedores capaces de lograr soluciones de comunicación efectiva y diferenciada para las marcas.</p>
					<p>Nuestro equipo de profesionales Senior's fanáticos de NTIC y de la comunicación visual digital, se encuentran en constante evolución, por lo que informarnos y estar actualizado sobre las nuevas tecnologías es parte de nuestro trabajo diario, con la finalidad de llevar las últimas tendencias tecnológicas a la puerta de nuestros clientes.</p>
					<div class="features-us">
						<div class="left-us">
							<div class="btn-featuresUs">
								<div class="btn-featuresUs">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<a href="">CONTÁCTANOS</a>
								</div>
							</div>
						</div>
						<div class="right-us">
							<img src="images/8.svg" alt="" />
							<div class="text-usImage">
								<p>GITANO</p>
							</div>
						</div>
					</div>
				</div>
				<div class="image-us">
					<div class="column-image-us">
						<img src="images/6.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="container-module-jobs">
		<img src="images/fondoIdea.jpg" alt="" />
		<div class="row-jobs">
			<div class="title-jobs">
				<h2>Casos de éxito</h2>
				<p>Números que inspiran confianza</p>
			</div>
			<div class="content-jobs">	
				<?php for($i=0; $i<1; $i++){?>
					<div class="box-jobs">
						<span></span>
						<span></span>
						<div class="centerBoxJobs flexbox">
							<div class="boxImageJobs">
								<h3>+10 años</h3>
								<i>Experiencia</i>
							</div>
							<div class="boxImageJobs">
								<h3>+130</h3>
								<i>Proyectos realizados</i>
							</div>
							<div class="boxImageJobs">
								<h3>+45</h3>
								<i>Clientes confían en nosotros</i>
							</div>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
	
	
	
	
	
	<div id="wp_containerContact">
		<div class="wp_flexbox">
			<div class="wp_columnImage-Contact">
			
			</div>
			<div class="wp_columnForm-Contact">
				<div class="wp_columnAlign-Contact">
					<h2>hola, contáctanos</h2>
					<div class="wp_textForm-Contact">
						<p>Envíanos un mensaje, te atenderemos lo más pronto posible.</p>
					</div>
					<div class="wp_columnField-Contact">
						
						<p><label>nombre</label><span><input type="text" name="Nombre" value="" size="40" /></span></p>
						<p><label>correo</label><span><input type="email" name="Correo" value="" size="40" /></span></p>
						<p><label>mensaje</label><span><textarea name="Mensaje" cols="40" rows="10" ></textarea></span></p>
						<p><input type="submit" value="enviar"/><i></i></p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	<div id="container-module-logos">
		<div class="center">
			<div class="row-titleLogos">	
				<h2>nuestros clientes</h2>
			</div>
			<div class="row-logos">
				<div class="slick-logos">
					<?php for($i=0; $i<=7; $i++){?>
					<div>
						<img src="images/14.png" alt="" />
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>

</section>

<?php
	include ("footer.php");
?>	

