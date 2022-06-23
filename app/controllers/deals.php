<?php
include($ROOT_PATH . "/app/helpers/validatedeal.php");
$errors = array();
$conditions = array();
$contactConditions = array();
$emailCondition = array();
$username = '';
$id = '';
$email = '';
$admin = '';
$password = '';
$passwordConf = '';
$table = 'deals';
// $client_users = selectAllClients($table, [`admin` => 1]);
// $admin_users = selectAllfreelancers($table, [`admin` => 1]);

if (isset($_GET['lkr'])) {

}


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
    //dd($_GET);
   
    $errors = validatedeal($_GET);

    $pattern = "/^[a-zA-Z]+$/";
    $check = preg_match_all($pattern, $_GET['Contact_person_Name']);

    if ($check) {
        $name = $_GET['Contact_person_Name'];
    } else {
        $errors['error'] = 1;
        $nameErr = "Enter the correct pattern";
    }
    
    $_POST["submit_deal"] = $_GET["submit_deal"];


    if (count($errors) === 0) {
        $_GET['project_name'] = "";
        // dd($_GET);
        $_GET['user_id'] = $_SESSION['id'];

        $conditions['Contact_person_Name'] = $_GET['Contact_person_Name'];
        $conditions['organization'] = $_GET['organization'];
        $conditions['title'] = $_GET['title'];
        $conditions['value'] = $_GET['value'];
        $conditions['pipeline'] = $_GET['pipeline'];
        $conditions['status_id'] = $_GET['status_id'];
        $conditions['prospected_closing_date'] = $_GET['prospected_closing_date'];
        $conditions['expected_closing_date'] = $_GET['expected_closing_date'];
        $conditions['project_name'] = $_GET['project_name'];
        $conditions['user_id'] = $_GET['user_id'];

        
        $contactConditions['Phone_No'] = $_GET['Phone_No'];
        $contactConditions['phone_category'] = $_GET['phone_category'];
        // dd($contactConditions);

        $emailCondition['Email_Address'] = $_GET['Email_Address'];
        // dd($emailCondition);

        $dealId = create($table, $conditions);
        $contactConditions['deal_id'] = $dealId;
        $postid = create('deal_phone_numbers', $contactConditions);

        $emailCondition['deal_id'] = $dealId;
        $postid2 = create('deal_email', $emailCondition);
        
       
        $_SESSION['message'] = 'Deal Added Succesfully';
        $_SESSION['type'] = '';
        header('location: ' . $BASE_URL . 'dashboard.php');
    } else {
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
