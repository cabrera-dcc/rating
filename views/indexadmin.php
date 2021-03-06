<?php
	session_start();
	if(!isset($_SESSION['AUT']) || $_SESSION['AUT'] != "S"){
		if(isset($_SESSION['AUT'])){
			unset($_SESSION['AUT']);
		}
		session_destroy();
		header("Location: ../index.php?ERROR=NOT_AUTHORIZED");
	}
	else{
		require_once("../scripts/admin.php");
		if(isset($_GET['option']) && isset($_GET['ref'])){
			if($_GET['option'] == "start"){
				start_score($_GET['option'],$_GET['ref']);
			}
			elseif($_GET['option'] == "close"){
				close_score($_GET['option'],$_GET['ref']);
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<title>Rating System</title>
	<meta name="application-name" content="Rating"/>
    <meta name="description" content="Sistema de valoración de projectos"/>
    <meta name="author" content="Daniel Cabrera Cebrero (http://cabrera-dcc.github.io)"/>
    <meta name="version" content="Beta-1 (rev. 20150612)"/>
    <meta name="keywords" content="opensource,rating,projects"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
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
		        <a class="navbar-brand" rel="bookmark" target="_self" hreflang="" href="../scripts/close_session.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> CLOSE</a>
		    </div>
	    	<div class="collapse navbar-collapse" id="navbar-collapse">
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
			<div class="panel panel-default small">
  				<div class="panel-heading"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> <strong>Proyectos</strong></div>
  				<div class="panel-body">
	  				<div class="table-responsive">
		  				<table class="table table-striped table-hover table-condensed">
		  					<tr>
		  						<th><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span></th>
		  						<th>Nombre <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></th>
		  						<th>Responsables <span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
		  						<th>Estado <span class="glyphicon glyphicon-flag" aria-hidden="true"></span></th>
		  						<th>Opciones <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></th>
		  					</tr>
		  					<?php print_projects(); ?>
	  					</table>
	  				</div>
  				</div>
			</div>
			<div class="panel panel-default small">
  				<div class="panel-heading"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> <strong>Ranking</strong></div>
  				<div class="panel-body">
	  				<div class="table-responsive">
		  				<table class="table table-striped table-hover table-condensed">
		  					<tr>
		  						<th><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span></th>
		  						<th>Nombre <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></th>
		  						<th>Responsables <span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
		  						<th>Valoración media <span class="glyphicon glyphicon-scale" aria-hidden="true"></span></th>
		  					</tr>
		  					<?php print_ranking(); ?>
	  					</table>
	  				</div>
  				</div>
			</div>
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
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
