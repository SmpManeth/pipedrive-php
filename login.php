<?php include("path.php");
require_once "app/includes/ProjectManagement.php";
include($ROOT_PATH . "/app/controllers/users.php");
include($ROOT_PATH . "/app/controllers/deals.php");
include($ROOT_PATH . "/app/controllers/dealsDetails.php");
include($ROOT_PATH . "/app/controllers/dealsTable.php");
include($ROOT_PATH . "/app/controllers/import.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("app/includes/head.php") ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="./assets/css/style.css">

    <title>Pipeline name + Dashboard</title>
</head>

<body class="img js-fullheight" style="background-image: url(assets/images/bg.jpg);">
<div class="image-side-bar-logo">
        <img src="https://sterlinglanka.com/wp-content/uploads/2022/06/sterling_logo-300x82.png" alt="" srcset="">
    </div>


    <section class="vh-100">
        <div class="container-fluid h-custom">

            <div class="row d-flex justify-content-center align-items-center h-100">
            
                <div class="col-md-8 col-lg-6 col-xl-4 ">
                    <form id="login-form" class="form" action="deals.php" method="post">
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 h4">Login</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required/>
                        </div>


                        <!-- Password input -->
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" name="login-btn" class="form-control btn btn-primary submit px-3" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
    <script src="https://kit.fontawesome.com/27dd36351b.js" crossorigin="anonymous"></script>
</body>

</html>