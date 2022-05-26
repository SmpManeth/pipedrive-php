<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("app/includes/head.php") ?>
    <title>Pipeline name + Dashboard</title>
</head>

<body style="background-color:#F7F7F7 ">

    <!-- header and Sidebar -->
    <?php include("app/includes/header.php") ?>
    <div class="d-flex sidenav-menu">
        <div class="tab-content table" id="v-pills-tabContent">
            <?php include("app/includes/leads.php") ?>
            <?php include("app/includes/deals.php") ?>
            <?php include("app/includes/settings.php") ?>
        </div>
        <h2>odf</h2>
    </div>
    <?php include("app/includes/footer.php") ?>
</body>

</html>