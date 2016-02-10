<div class="container">
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  data-target="#navbar-1" aria-expanded="false">
        				<span class="sr-only"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      					</button>
						<a style="font-size:1.45em;" href="http://fiseaprende.com/" class="unodos navbar-brand">Fise</a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">
							
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Materias<span class="caret"></span></a>
								<ul class="dropdown-menu hoverhead">
            						<li><a href="http://fiseaprende.com/basica/lista-algebrabasica">Algebra basica</a></li>
            						<li><a href="http://fiseaprende.com/algintermedia/lista-algintermedia">Algebra intermedia</a></li>
            						<li><a href="http://fiseaprende.com/trigonometria/lista-trigonometria">Trigonometria</a></li>
            						<li><a href="http://fiseaprende.com/geometrianalitica/lista-geometria">Geometria</a></li>
            						<li><a href="http://fiseaprende.com/estadistica/lista-estadistica">Estadistica</a></li>
            						<li><a href="http://fiseaprende.com/calculodif/lista-diferencial">Calculo Diferencial</a></li>
            						<li><a href="http://fiseaprende.com/calculointegral/lista-integral">Calculo Integral</a></li>
                                    <li><a href="http://fiseaprende.com/c-avanzado/lista-calculo">Calculo Avanzado</a></li>
                                    <li><a href="http://www.fiseaprende.com/lineal/lista-algebralineal">Algebra lineal</a></li>
                                    <li><a href="http://fiseaprende.com/diferenciales/lista-diferenciales">Ecuaciones Diferenciales</a></li>

            					</ul>
							</li>
						</ul>
						

						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>
									<?php 
									echo $_SESSION['name_user'];
									?>&nbsp;&nbsp;
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu hoverhead">
									<li><a href="http://fiseaprende.com/usuario/users?ini=inicio">Panel usuario</a></li>
									<li><a href="http://fiseaprende.com/usuario/users?cs=cs&tb=tb">Contenidos Guardados</a></li>
									<li><a href="http://fiseaprende.com/usuario/users?pref=pref&tb=tb">Preferencias</a></li>
									<li class="divider"></li>
									<li><a href="http://fiseaprende.com/usuario/cerrarfise">Cerrar Sesion</a></li>
								</ul>
							</li>
						</ul>

					</div>

				</div>

			</nav>
	    </header>
	   
</div>	