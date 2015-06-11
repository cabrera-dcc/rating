<?php

unset($_SESSION['AUT']);
session_destroy();
header("Location: ../index.php");
