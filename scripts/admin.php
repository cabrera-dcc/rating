<?php

require_once("../scripts/db_functions.php");

function print_projects()
{
	$query = "SELECT * FROM projects";
	$rows = select($query);

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
