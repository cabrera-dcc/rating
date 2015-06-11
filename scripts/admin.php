<?php
/**
 * Functions to show data properly in administration zone of project rating system
 *
 * @author cabrera-dcc (http://cabrera-dcc.github.io)
 * @license GNU General Public License (GPLv3 - https://github.com/cabrera-dcc/rating/blob/master/LICENSE)
 * @version Beta-1 (rev. 20150611)
*/

require_once("../scripts/db_functions.php");

function print_projects()
{
	$query = "SELECT * FROM projects";
	$rows = select($query);

	if($rows != false){
		foreach ($rows as $row) {
			echo "<tr id='ref-" . $row['id'] . "'>";
				echo "<td class='ref'>" . $row['id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['responsible'] . "</td>";
				echo "<td>" . $row['status'] . "</td>";
				echo "<td>";
				require("../includes/option_icons.php");
				echo "</td>";
			echo "</tr>";
		}
	}
}

function print_ranking()
{
	$query = "SELECT idProject, email, AVG(score) AS Points FROM project_email_score WHERE score IS NOT NULL GROUP BY idProject ORDER BY Points DESC";
	$rows = select($query);
	$position = 1;

	if($rows != false){

		foreach ($rows as $row) {
			$idProject = $row['idProject'];
			$query = "SELECT name, responsible FROM projects WHERE id=$idProject";
			$subs = select($query);
			foreach ($subs as $sub) {
				echo "<tr id='ref-" . $row['idProject'] . "'>";
					echo "<td class='ref'>" . $position . "</td>";
					echo "<td class='ref'>" . $sub['name'] . "</td>";
					echo "<td>" . $sub['responsible'] . "</td>";
					echo "<td>" . $row['Points'] . "</td>";
				echo "</tr>";
				$position++;
				
			}
		}
	}

}

function start_score($option,$ref)
{
	$query = "UPDATE projects SET status=1 WHERE id=$ref";
	update($query);
}

function close_score($option,$ref)
{
	$query = "UPDATE projects SET status=2 WHERE id=$ref";
	update($query);
}
