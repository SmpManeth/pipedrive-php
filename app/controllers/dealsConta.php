<?php
$errors = array();
$conditions = array();
$username = '';
$id = '';
$email = '';
$admin = '';
$password = '';
$passwordConf = '';
$table = 'deal_phone_numbers';


if (isset($_GET)) {
//   dd($_POST);

    $_POST["submit_deal"]= $_GET["submit_deal"];

    if (count($errors) === 0) {
 
     
        $_GET['user_id'] = $_SESSION['id'];

            $conditions['phone'] = $_GET['phone'];
            $conditions['pohn_cat'] = $_GET['pohn_cat'];

        $postid = create($table, $conditions);
    
        
        $_SESSION['message'] = 'Deal Added Succesfully';
        $_SESSION['type'] = '';
        header('location: ' . $BASE_URL . 'dashboard.php');
    } else {
        $_SESSION['message'] = 'Error';
        $_SESSION['type'] = '';
    }
}