<?php include("path.php");
include($ROOT_PATH . "/app/controllers/users.php");
include($ROOT_PATH . "/app/controllers/deals.php");



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
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sterling Pipline</title>

</head>

<body style="background-color:#F7F7F7 ">

    <!-- header and Sidebar -->
    <?php include($ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="d-flex sidenav-menu">
        <div class="container">
            <form class="form-horizontal" role="form" action="updateDeals.php" method="GET">
                <h2>Registration</h2>
                <?php
                foreach ($results as $key => $value) { ?>

                    <input type="text" name="deal-id" hidden id="" value="<?php echo $value['id'] ?>">

                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">Organization</label>
                        <div class="col-sm-9">
                            <input name="organization" id="organization" type="text" placeholder="Organization" class="form-control" value="<?php echo $value['organization'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Contact Person Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="Contact_person_Name" id="Contact_person_Name" placeholder="Contact Person Name" class="form-control" value="<?php echo $value['Contact_person_Name']; ?>" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email* </label>
                        <div class="col-sm-9">
                            <input type="text" name="Email_Address" id="Email_Address" placeholder="Email" class="form-control" name="email" value="<?php echo $value['Email_Address']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="Address" id="Address" placeholder="Address" class="form-control" value="<?php echo $value['Address']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="text" name="Phone_No" id="Phone_No" placeholder="Phone_No" class="form-control" value="<?php echo $value['Phone_No']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Prospected Closing Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="prospected_closing_date" class="form-control" value="<?php echo $value['prospected_closing_date']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber" class="col-sm-3 control-label">Expected Closing Date</label>
                        <div class="col-sm-9">
                            <input type="date" type="date" name="expected_closing_date" class="form-control" value="<?php echo $value['expected_closing_date']; ?>">
                        </div>
                    </div>
                    <div class="form-group">


                    <?php  } ?>

                    <div class="modal-footer" padding=>
                        <input type="reset" name="reset" value="Close" class="btn btn-primary" data-bs-dismiss="modal">
                        <input type="submit" name="update_deals" value="Update" class="btn btn-primary">
                    </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
    </div>

    <?php include($ROOT_PATH . "/app/includes/footer.php") ?>

</body>

</html>