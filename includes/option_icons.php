<?php
echo "<a class='start_option' rel='bookmark' target='_self' hreflang='es' href='indexadmin.php?option=start&ref=" . $row['id'] . "' title='Abrir para valorar'><span class='glyphicon glyphicon-play' aria-hidden='true'></span></a> | ";
echo "<a class='close_option' rel='bookmark' target='_self' hreflang='es' href='indexadmin.php?option=close&ref=" . $row['id'] . "' title='Cerrar la valoración'><span class='glyphicon glyphicon-stop' aria-hidden='true'></span></a> ";
