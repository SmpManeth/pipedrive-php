<?php include("../../path.php");
require_once "ProjectManagement.php";
include($ROOT_PATH . "/app/controllers/users.php");
include($ROOT_PATH . "/app/controllers/deals.php");
include($ROOT_PATH . "/app/controllers/dealsDetails.php");
include($ROOT_PATH . "/app/controllers/dealsTable.php");
include($ROOT_PATH . "/app/controllers/import.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Sterling Pipline</title>

</head>

<body style="background-color:#F7F7F7 ">

    <!-- header and Sidebar -->
    <?php include($ROOT_PATH . "/app/includes/header.php") ?>
    <div class="d-flex sidenav-menu">


    </div>
    <?php include($ROOT_PATH . "/app/includes/footer.php") ?>

</body>

</html>