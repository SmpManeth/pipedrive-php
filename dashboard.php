<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Pipeline name + Dashboard</title>
</head>

<body style="background-color:#F7F7F7 ">
    <!-- header and Sidebar -->
    <!-- header and Sidebar -->
    <?php include("app/includes/header.php") ?>
    <div class="d-flex sidenav-menu">
        <div class="tab-content table" id="v-pills-tabContent">
            <?php include("app/includes/leads.php") ?>
            <?php include("app/includes/deals.php") ?>
        </div>
    </div>
    <?php include("app/includes/footer.php") ?>
</body>

</html>