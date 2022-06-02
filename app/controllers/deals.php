<?php
include($ROOT_PATH . "/app/helpers/validatedeal.php");
$errors = array();
$username = '';
$id = '';
$email = '';
$admin = '';
$password = '';
$passwordConf = '';
$table = 'deal';
// $client_users = selectAllClients($table, [`admin` => 1]);
// $admin_users = selectAllfreelancers($table, [`admin` => 1]);



//delete users
if (isset($_GET['del_id'])) {
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = 'User Deleted Succesfully';
    $_SESSION['type'] = '';
    header('location: ' . $BASE_URL . 'admin/managefreelancers.php');
    
}
if (isset($_GET['dell_id'])) {
    $count = delete($table, $_GET['dell_id']);
    $_SESSION['message'] = 'User Deleted Succesfully';
    $_SESSION['type'] = '';
    header('location: ' . $BASE_URL . 'admin/manageClients.php');
    exit();
}


if (isset($_GET["submit_deal"])) {
   
    $errors = validatedeal($_GET);
 
    $pattern="/^[a-zA-Z]+$/";
    $check=preg_match_all($pattern,$_GET['Contact_person_Name']);
    if($check)
    {
       $name=$_GET['Contact_person_Name'];
    }
    else
    {
        $errors['error']=1;
       $nameErr="Enter the correct pattern";
    }
    /* if (isset($_POST["client"])) {
        $_POST['urole'] = 'client';
    } elseif (isset($_POST["freelancer"])) {
        $_POST['urole'] = 'freelancer';
    }*/
    if (count($errors) === 0) {
       
        unset($_GET["submit_deal"]);
        unset($_GET["phone"]);
        unset($_GET["email"]);
        unset($_GET["currency"]);
        unset($_GET["phone_category"]);
      



        $_GET['user_id'] = $_SESSION['id'];
        

     $postid = create($table, $_GET);
        $_SESSION['message'] = 'Deal Added Succesfully';
        $_SESSION['type'] = '';
        header('location: ' . $BASE_URL . 'dashboard.php');
      
    } 
    else{
        $_SESSION['message'] = 'Error';
        $_SESSION['type'] = '';
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
