<?php

include($ROOT_PATH."/Includes/helpers/validateTopics.php");
$table = 'topics';

$id = '';
$name = '';
$description = '';
$discription="we work";
$errors =array();
$topics = selectAll($table);
//dd($topics);

//creating a topic
if (isset($_POST['btn-category-post'])) 
{

   
    $errors=validatetopic($_POST);
    if (count($errors) === 0) {

            unset($_POST['btn-category-post']);
            $_POST['description']='we work';
            $topic_id = createtopic( $table , $_POST);
            $_SESSION['message'] = 'Topic Created Succesfully';
            $_SESSION['type'] = '';
            header('location: ' . $BASE_URL . 'admin/courses.php');
            exit();      

    }else {
       

    }
    
}

//get topic and display on field

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table,['id' => $id]);
    
}

//delete topics
if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table,$id);
    $_SESSION['message'] = 'Topic Deleted Succesfully';
    $_SESSION['type'] = '';
    header('location: ' . $BASE_URL . 'admin/topics/index.php');
    exit();
    
}

//update topics
if (isset($_POST['udpate-topic'])) {
    $errors=UpdateTopic($_POST);
    if (count($errors) === 0) {
    $id = $_POST['id'];
    unset($_POST['udpate-topic'],$_POST['id']);
    $topic_id = update($table,$id,$_POST);
    $_SESSION['message'] = 'Topic Updated Succesfully';
    $_SESSION['type'] = '';
    header('location: ' . $BASE_URL . 'admin/topics/index.php');
    exit();

}else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $discription = $_POST['discription'];

}
   
    
}