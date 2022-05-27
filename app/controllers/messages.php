<?php

include($ROOT_PATH."/Includes/database/db.php");

include($ROOT_PATH."/Includes//helpers/validatePosts.php");

$table ='message';
$errors =array();
$topics = selectAll('topics');
$posts = selectAll($table);
$title = '';
$id = ''; 
$body = "";
$topic_id = '';
$published = '';

//creating posts
if (isset($_POST['msg'])) 
{
    
    if (count($errors) == 0) {
       
        $_POST['sender']=$_SESSION['id'];
        $rid=$_SESSION['receivedid'];
        $_POST['receiver']=$_SESSION['receivedid'];
     
 
        $post_id = create( $table , $_POST);//create the post
        $_SESSION['message'] = "Post Created Succesfully";
        $_SESSION['type'] = "succes";
        header('location: ' . $BASE_URL . 'messages1.php?id='.$rid);//re directing to the post page
    }else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1:0;
    }

    
}


//delete posts
if (isset($_GET['del_id'])) {
    $count = delete($table,$_GET['del_id']);
    $_SESSION['message'] = 'Post Deleted Succesfully';
    $_SESSION['type'] = '';
    header('location: ' . $BASE_URL . 'admin/managejobs.php');
    exit();
    
}

//unpublish and publish posts
if (isset($_GET['published']) && isset($_GET['p_id'])) {
   $published = $_GET['published'];
   $p_id = $_GET['p_id'];
   $count = update( $table ,$p_id, ['published' => $published]);
   $_SESSION['message'] = 'Post Publish state changed';
   $_SESSION['type'] = '';
   header('location: ' . $BASE_URL . 'admin/posts/index.php');
   exit();
    
} 



//get post and display on field

if (isset($_GET['idg'])) {
    $ids = $_GET['id'];
    $post = selectOne($table,['id' => $ids]);
    
}

//update posts
if (isset($_POST['update-post'])) {
    $errors=UpdatePost($_POST);
     
    if (!empty($_FILES['image']['name'])) {
       $fileName = time(). '_' .$_FILES['image']['name']; //get the file name
       $destination =$ROOT_PATH."/Includes/Images/post_images/" .$fileName;//define the destination
       $results= move_uploaded_file($_FILES['image']['tmp_name'],$destination); //save image to the destination

       if ($results) {
           $_POST['image'] = $fileName ; 
       } else {
           array_push($errors,"Failed to Upload Image!");
       }
       
   
    } else {
        array_push($errors,"Post Image Required");
    }

    if (count($errors) == 0) {
        $id=$_POST['id'];
        
        unset($_POST['update-post'],$_POST['id']);
        $_POST['userid'] =$_SESSION['id'];
        
       // $_POST['published'] =isset($_POST['published']) ? 1:0;
        $_POST['body']=htmlentities($_POST['body']);
        $post_id = update( $table ,$id, $_POST);//create the post
        $_SESSION['message'] = "Post updated Succesfully";
        $_SESSION['type'] = "";
        header('location: ' . $BASE_URL . 'admin/managejobs.php');//re directing to the post page
    }else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1:0;
    }
}