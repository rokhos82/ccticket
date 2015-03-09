<?php
session_start();

if(isset($_SESSION["user_id"])) {
	/* Redirect to user home page */
}
else {
	/* Display login page.  Check to see if login parameters are already being passed in. */
	require("app/forms/login.php");
}
?>