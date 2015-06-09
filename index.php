<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<title>Rating System</title>
	<meta name="application-name" content="Rating"/>
    <meta name="description" content="Sistema de valoración de projectos"/>
    <meta name="author" content="Daniel Cabrera Cebrero (http://cabrera-dcc.github.io)"/>
    <meta name="version" content="Alpha (rev. 20150609)"/>
    <meta name="keywords" content="opensource,rating,projects"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<header class="jumbotron">
		<div class="container text-center">
        	<h1><small>VALORACIÓN DE PROYECTOS</small></h1>
    	</div>
	</header>

	<nav class="navbar navbar-default navbar-inverse" role="navigation">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		        <a class="navbar-brand" rel="" target="" type="" hreflang="" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		    </div>

	    	<div class="collapse navbar-collapse" id="navbar-collapse">
	        	<ul class="nav navbar-nav navbar-left text-uppercase">
	            	<li><a rel="" target="" type="" hreflang="" href="#"><strong>Menu</strong></a></li>
	        	</ul>
	        	<ul class="nav navbar-nav navbar-right text-uppercase">
	            	<li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong>Administración</strong> <span class="caret"></span></a>
	                	<ul class="dropdown-menu text-capitalize" role="menu">
	                    	<form id="loginForm" name="adminLoginForm" action="index.php" method="POST" accept-charset="UTF-8" enctype="text/plain" target="_self" class="container-fluid text-center">
								<div class="divider"></div>
								<div class="form-group">
									<label for="userInput">Administrador</label>
									<input name="user" type="text" class="form-control" id="userInput" required="required"/>
								</div>
								<div class="form-group">
									<label for="passwordInput">Password</label>
									<input name="password" type="password" class="form-control" id="passwordInput" required="required"/>
								</div>
								<button type="submit" class="btn btn-default btn-block">Log in</button>
								<div class="divider"></div>
							</form>
	                	</ul>
	            	</li>
	        	</ul>
	    	</div>
   		</div>
	</nav>

	<main class="container-fluid">
		<section class="row text-center">	
			<form id="emailForm" name="emailAdressForm" action="index.php" method="POST" accept-charset="UTF-8" enctype="text/plain" target="_self" class="col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2">
				
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-9">
						<div class="form-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title text-uppercase">Proyecto</h3>
								</div>
								<div class="panel-body">
									Nombre del Proyecto
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title text-uppercase">Responsables</h3>
								</div>
								<div class="panel-body">
									Responsables del Proyecto
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-4 col-md-3">
						<a href="#" class="thumbnail">
							<img src="images/generic-user.png" alt="alt">
						</a>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<label for="inlineRadio"><h3 class="panel-title text-uppercase">Valoración</h3></label>
							</div>
							<div class="panel-body">
								<div class="input-group" id="inlineRadio">
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" required="required"/> 1
									</label>
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" required="required"/> 2
									</label>
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3" required="required"/> 3
									</label>
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4" required="required"/> 4
									</label>
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="5" required="required"/> 5
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					
					<div class="form-group col-xs-12 col-sm-8 col-md-10">
						<div class="input-group">
							<div class="input-group-addon">@</div>
							<input name="email" type="email" class="form-control" id="emailAdressInput" placeholder="Introduce un email" required="required"/>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2">
						<button type="submit" class="btn btn-default btn-block">Enviar</button>
					</div>
				</div>
				
			</form>
		</section>
	</main>

	<footer class="container small">
        <div class="row">
        	<div class="col-xs-12">
	            <p class="navbar-text"><abbr title="Sistema de Valoración de Proyectos" class="initialism"><strong>RATING</abbr> &#169; 2015 - <i>A Project Rating System by <a target="_blank" rel="author" hreflang="es" type="text/html" href="http://cabrera-dcc.github.io">Daniel Cabrera Cebrero</a></i></strong></p>
	            <i><p class="navbar-text small">Software licensed under a GNU General Public License (<a rel="license" target="_blank" hreflang="en" type="text/html" href="https://github.com/cabrera-dcc/rating/blob/master/LICENSE">GPLv3</a>)</p>
	            <p class="navbar-text small">Design and styles licensed under a <a rel="license" target="_blank" hreflang="en" type="text/html" href="http://opensource.org/licenses/MIT">MIT License</a></p></i>
        	</div>
        </div>
	</footer>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>