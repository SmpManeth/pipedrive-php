<?php
include($ROOT_PATH . "/app/helpers/validatedeal.php");
$errors = array();
$conditions = array();
$contactConditions = array();
$emailCondition = array();
$commCondition = array();
$username = '';
$id = '';
$email = '';
$admin = '';
$password = '';
$passwordConf = '';
$table = 'deals';
$results = array();
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
        $conditions['Address'] = $_GET['Address'];
        $conditions['Make_Modeling'] = $_GET['Make_Modeling'];
        $conditions['deal_comment'] = $_GET['deal_comment'];
        $conditions['project_name'] = $_GET['project_name'];
        $conditions['user_id'] = $_GET['user_id'];
        // dd($conditions);

        $contactConditions['Phone_No'] = $_GET['Phone_No'];
        $contactConditions['phone_category'] = $_GET['phone_category'];
        $contactConditions['phone_extra'] = $_GET['phone_extra'];
        $contactConditions['phone_category_extra'] = $_GET['phone_category_extra'];
        // dd($contactConditions);

        $emailCondition['Email_Address'] = $_GET['Email_Address'];
        $emailCondition['email_extra'] = $_GET['email_extra'];
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

if (isset($_GET['dealid'])) {


    $id = $_GET['dealid'];

    $sql = "SELECT * FROM deals INNER JOIN deal_phone_numbers ON deals.id = deal_phone_numbers.deal_id INNER JOIN deal_email ON deals.id = deal_email.deal_id WHERE deals.id=$id";
    // dd($sql);
    $results = mysqli_query($conn, $sql);
}

if (isset($_GET["update_deals"])) {
    
 
    //  $errors = updateUser($_POST);

    if (count($errors) === 0) {

        $id = $_GET['deal-id'];
        unset($_GET["update_deals"], $_GET["deal-id"]);
 
        $contactConditions['deal_id'] = $id;
        $contactConditions['Phone_No'] = $_GET['Phone_No'];
        $contact=$contactConditions['Phone_No'];
 
        $emailCondition['deal_id'] =$id;
        $emailCondition['Email_Address'] = $_GET['Email_Address'];
        $email=$emailCondition['Email_Address'];
        

        

        unset($_GET["Phone_No"], $_GET["Email_Address"]);


        update($table, $id, $_GET);
        $sql = "UPDATE `deal_phone_numbers` SET `Phone_No`= $contact WHERE `deal_id`=$id";
        $results = mysqli_query( $conn, $sql);
        // dd($sql);
        update($table, $id, $_GET);
        $sql = "UPDATE `deal_email` SET `Email_Address`= '$email' WHERE `deal_id`=$id";
        // dd($sql);
        $results2 = mysqli_query( $conn, $sql);
        //  dd($results2);

        // update($table, $id, $_GET);
        // $sql = "UPDATE `deal_comment` SET `deal_comment`= '$comm' WHERE `deal_id`=$id";
        // $results3 = mysqli_query( $conn, $sql);

        // dd($results);
        $_SESSION['message'] = " User Updated Succesfuly";
        $_SESSION['type'] = '';
        header('location: ' . $BASE_URL . 'deals.php');
        exit();
    } else {
       
    }
}
 