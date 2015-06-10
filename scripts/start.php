<?php

require_once("db_functions.php");

$activeProject = getActiveProject();

foreach ($activeProject as $project) {
	$id = $project['id'];
	$name = $project['name'];
	$responsible = $project['responsible'];
	$picture = $project['picture'];
	$web = $project['web'];
	$status = $project['status'];	
}

