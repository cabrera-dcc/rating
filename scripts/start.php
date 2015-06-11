<?php
/**
 * Functions to get the active project from the project rating database
 *
 * @author cabrera-dcc (http://cabrera-dcc.github.io)
 * @license GNU General Public License (GPLv3 - https://github.com/cabrera-dcc/rating/blob/master/LICENSE)
 * @version Beta-1 (rev. 20150611)
*/

require_once("db_functions.php");

$activeProject = getActiveProject();

if($activeProject != false){
	foreach ($activeProject as $project) {
		$id = $project['id'];
		$name = $project['name'];
		$responsible = $project['responsible'];
		$picture = $project['picture'];
		$web = $project['web'];
		$status = $project['status'];	
	}
}
