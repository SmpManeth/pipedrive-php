<?php
 include("path.php");

include($ROOT_PATH . "/app/controllers/users.php");
if (empty($_SESSION['id'])){
	header('location: ' . $BASE_URL . 'login.php');
}
else {
	header('location: ' . $BASE_URL . 'dashboard.php');
	exit();
}


?>