<?php include("path.php");
require_once "app/includes/ProjectManagement.php";
include($ROOT_PATH . "/app/controllers/users.php");
include($ROOT_PATH . "/app/controllers/deals.php");
include($ROOT_PATH . "/app/controllers/dealsDetails.php");
include($ROOT_PATH . "/app/controllers/dealsTable.php");
include($ROOT_PATH . "/app/controllers/import.php");;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include("app/includes/head.php") ?>
    <title>Sterling Pipline</title>

</head>

<body style="background-color:#F7F7F7 ">

    <!-- header and Sidebar -->
    <?php include("app/includes/header.php") ?>
    
    <?php include("app/includes/footer.php") ?>

</body>

</html>