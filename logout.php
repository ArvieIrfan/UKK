<?php

session_start();
session_destroy();
unset($_SESSION["nik"]);
if (!isset($_SESSION["nik"])) {
	header("location:index.php");
}
else {
	var_dump($_SESSION["nik"]);
}