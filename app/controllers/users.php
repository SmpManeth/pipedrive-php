<?php

include($ROOT_PATH . "/app/database/db.php");
include($ROOT_PATH . "/app/helpers/validateUsers.php");

$errors = array();
$username = '';
$id = '';
$email = '';
$admin = '';
$password = '';
$passwordConf = '';
$table = 'users';
// $client_users = selectAllClients($table, [`admin` => 1]);
// $admin_users = selectAllfreelancers($table, [`admin` => 1]);




function loginUser($user)
{

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['user_type'] = $user['admin'];
    $_SESSION['role'] = $user['user_type'];
    $_SESSION['message'] = 'Logged in!';
    $_SESSION['type'] = 'success';

    header('location: ' . $BASE_URL . 'dashboard.php');
    exit();
}
//delete users
if (isset($_GET['del_id'])) {
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = 'User Deleted Succesfully';
    $_SESSION['type'] = '';
    header('location: ' . $BASE_URL . 'admin/managefreelancers.php');
    exit();
}
if (isset($_GET['dell_id'])) {
    $count = delete($table, $_GET['dell_id']);
    $_SESSION['message'] = 'User Deleted Succesfully';
    $_SESSION['type'] = '';
    header('location: ' . $BASE_URL . 'admin/manageClients.php');
    exit();
}


if (isset($_POST["register-btn"]) || isset($_POST["create-admin"])) {
    $errors = validateUser($_POST);

    /* if (isset($_POST["client"])) {
        $_POST['urole'] = 'client';
    } elseif (isset($_POST["freelancer"])) {
        $_POST['urole'] = 'freelancer';
    }*/
    if (count($errors) === 0) {

        unset($_POST["register-btn"], $_POST["passwordConf"], $_POST["create-admin"], $_POST["agree"]);

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);


        if (isset($_POST["admin"])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = " User Created Succesfuly";
            $_SESSION['type'] = '';
            header('location: ' . $BASE_URL . 'admin/users/index.php');
            exit();
        } else {
            $_POST['admin'] = 0;

            $user_id = create($table, $_POST);

            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
        }
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}


if (isset($_POST["update-user"])) {

    $errors = updateUser($_POST);

    if (count($errors) === 0) {

        $id = $_POST['id'];
        unset($_POST["update-user"], $_POST["passwordConf"], $_POST['id']);

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;

        $count = updatework($table, $id, $_POST);
        $_SESSION['message'] = " User Updated Succesfuly";
        $_SESSION['type'] = '';
        header('location: ' . $BASE_URL . 'admin/admindashboard.php');
        exit();
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}



if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    $user = selectOne($table, ['id' => $uid]);

    $id = $user['id'];
    $admin = $user['role'];
    $usernamess = $user['username'];
    $email = $user['email'];
    $countryy = $user['country'];
}

if (isset($_POST['login-btn'])) {

    $errors = validateLogin($_POST);

    if (count($errors) === 0) {


        $user = selectOne($table, ['username' => $_POST['username']]);



        if ($user && password_verify($_POST['password'], $user['password'])) {

            loginUser($user);
        } else {
            dd("Errors");
            array_push($errors, 'Wrong Credentials');
        }
    }
}


/*
if (isset($_POST['add-topic'])) {
    //unset($_POST['add-topic']);
    $topic_id = create( $table, $_POST);
    $user = selectOne($table, ['id' => $topic_id]);
    $_SESSION['message'] = 'Topic Created Succesfully';
    $_SESSION['type'] = 'success';
    header('location: ' . $BASE_URL . 'admin/topics/index.php');
    exit();

    
}
*/
