<?php
/**
 * Set of functions for Rating database, the project rating system
 *
 * Functions to connect to MYSQL database using PHP Data Objects (PDO) and interact with it.
 *
 * @author cabrera-dcc (http://cabrera-dcc.github.io)
 * @license GNU General Public License (GPLv3 - https://github.com/cabrera-dcc/rating/blob/master/LICENSE)
 * @version Beta-1 (rev. 20150610)
*/

function connectDB()
{
	require_once("db_config.php");

	try{
		$db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=$db_charset", $db_user, $db_passwd);
		$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);

		/*dev*/
		$db->setAttribute(PDO::ATTR_ERRMODE,true);
		$db->setAttribute(PDO::ERRMODE_EXCEPTION,true);
		//--dev--

		return $db;
	} catch (PDOException $ex){
		echo "<p>Error to connect: PDOException</p>";
	}
}

function getActiveProject()
{
	$query = "SELECT * FROM projects WHERE status=1";
	$db = connectDB();
	$rows = $db->query($query);
	if(!$rows){
		return null;
	}
	return $rows;
}

function isValidProject($id)
{
	$query = "SELECT status FROM projects WHERE id=$id";
	$db = connectDB();
	$rows = $db->query($query);
	if($rows){
		foreach ($rows as $project) {
			if($project['status'] == 1){
				return true;
			}
		}
		return false;
	}
	else{
		return false;
	}
}

function insert_score($idProject,$email,$score)
{
	$query = "INSERT INTO project_email_score (idProject,email,score) VALUES ('".$idProject."','".$email."','".$score."')";
	$db = connectDB();
	if($db->query($query)){
		return true;
	}
	return false;
}
