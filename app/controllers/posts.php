<?php
//include("../../path.php");
include($ROOT_PATH."/Includes/database/db.php");
include($ROOT_PATH."/Includes//helpers/validatePosts.php");

$table ='jobs';
$errors =array();
$topics = selectAll('topics');
if ($_SESSION) {
    $_POST['requestid']=$_SESSION['username'];
}

$posts = selectAll($table);

$postss = selectAll($table,$_POST);
$title = '';
$id = ''; 
$body = "";
$topic_id = '';
$published = '';

//creating posts
if (isset($_POST['add-job'])) 
{
  $errors=validatePost($_POST);
     
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
        unset($_POST['add-job']);
        $_POST['status']="Pending";
        $_POST['userid'] =$_SESSION['id'];
       // $_POST['published'] =isset($_POST['published']) ? 1:0;
        $_POST['body']=htmlentities($_POST['body']);
        
        $post_id = create( $table , $_POST);//create the post
        $_SESSION['message'] = "Post Created Succesfully";
        $_SESSION['type'] = "succes";
        header('location: ' . $BASE_URL . 'currentlypostedjobs.php');//re directing to the post page
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

if (isset($_GET['id'])) {
    $ids = $_GET['id'];
    $post = selectOne($table,['id' => $ids]);
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $price=$post['price'];
    $topic_id = $post['topic_id'];
   // $published = $post['published'];
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
        
        
       // $_POST['published'] =isset($_POST['published']) ? 1:0;
       // $_POST['body']=htmlentities($_POST['body']);
        $post_id = updatework( $table ,$id, $_POST);//create the post
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



//creating posts
if (isset($_POST['submitwork'])) 
{

     
     if (!empty($_FILES['uploadedfile']['name'])) {
        $fileName = time(). '_' .$_FILES['uploadedfile']['name']; //get the file name
        $destination =$ROOT_PATH."/Includes/submittedworks/" .$fileName;//define the destination
        $results= move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$destination); //save image to the destination

        if ($results) {
            $_POST['uploadedfile'] = $fileName ;
           
        } else {
           
            array_push($errors,"Failed to Upload Image!");
        }
        
        
     } else {
         array_push($errors,"Post Image Required");
     }

     
    
   
    if (count($errors) == 0) {
        unset($_POST['submitwork']);
        $_POST['status']="Done";
        $id=$_POST['id'];
        unset($_POST['id']);
    
        
        $post_id = updatework( $table ,$id, $_POST);//create the post
        $_SESSION['message'] = "Post Created Succesfully";
        $_SESSION['type'] = "succes";
        header('location: ' . $BASE_URL . 'viewandsubmitjobs.php');//re directing to the post page
    }else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1:0;
    }

    
}