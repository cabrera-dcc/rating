<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<title>Rating System</title>
	<meta name="application-name" content="Rating"/>
    <meta name="description" content="Sistema de valoración de projectos"/>
    <meta name="author" content="Daniel Cabrera Cebrero (http://cabrera-dcc.github.io)"/>
    <meta name="version" content="Alpha (rev. 20150608)"/>
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

	<nav class="navbar navbar-default navbar-inverse text-uppercase" role="navigation">
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
	        	<strong><ul class="nav navbar-nav navbar-left">
	            	<li><a rel="" target="" type="" hreflang="" href="#">MENU</a></li>
	            	<li><a rel="" target="" type="" hreflang="" href="#">MENU</a></li>
	        	</ul>
	        	<ul class="nav navbar-nav navbar-right">
	            	<li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DROPDOWN <span class="caret"></span></a>
	                	<ul class="dropdown-menu" role="menu">
	                    	<li><a rel="" target="" type="" hreflang="" href="#"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Menu</a></li>
	                    	<li><a rel="" target="" type="" hreflang="" href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Menu</a></li>
	                	</ul>
	            	</li>
	        	</ul></strong>
	    	</div>
   		</div>
	</nav>

	<main class="container">
		<section class="row text-center">	
			<form id="emailForm" name="emailAdressForm" action="index.php" method="POST" accept-charset="UTF-8" enctype="text/plain" target="_self" class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">@</div>
						<input name="email" type="email" class="form-control" id="emailAdress" placeholder="Introduce tu email" required="required"/>
					</div>
				</div>
				<button type="submit" class="btn btn-default btn-block">Valorar</button>
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