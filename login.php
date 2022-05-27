<?php include("path.php");
include($ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("app/includes/head.php") ?>
    <title>Pipeline name + Dashboard</title>
</head>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">

            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-8 col-lg-6 col-xl-4 ">
                    <div class="company-logo">
                        <img src="https://www.sterlinglanka.com/wp-content/uploads/2019/08/rrrr.png" alt="company logo">
                    </div>
                    <form id="login-form" class="form" action="login.php" method="post">
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 h4">Login</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control" />
                            <label class="form-label" for="form3Example3">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
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

                        <div class="text-center  mt-5 pt-2">
                            <button type="submit" name="login-btn" class="btn btn-primary btn-lg centered" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
    <script src="https://kit.fontawesome.com/27dd36351b.js" crossorigin="anonymous"></script>
</body>

</html>