<?php
/**
 * Set of functions to insert a new score into Rating database, the project rating system
 *
 * @author cabrera-dcc (http://cabrera-dcc.github.io)
 * @license GNU General Public License (GPLv3 - https://github.com/cabrera-dcc/rating/blob/master/LICENSE)
 * @version Beta-1 (rev. 20150610)
*/

require_once("db_functions.php");

if(!isset($_POST['project']) || !isset($_POST['email']) || !isset($_POST['score'])){
	header("Location: ../index.php?ERROR=MISSING-DATA");
}
elseif(!isValidProject($_POST['project']) || ($_POST['score'] < 0 || $_POST['score'] > 5)){
	header("Location: ../index.php?ERROR=INCORRECT-DATA");
}
elseif(!checkAllowedEmails($_POST['email'])){
	header("Location: ../index.php?ERROR=INVALID-EMAIL");
}
else{
	$id = $_POST['project'];
	$email = $_POST['email'];
	$score = $_POST['score'];

	header("Location: ../index.php?Info=OK");
}

function checkAllowedEmails($email)
{
	return true;
}