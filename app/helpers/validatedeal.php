<?php
function validatedeal($post)
{
   
    $errors = array();


    if (empty($post['Contact_person_Name'])) {

        array_push($errors, 'Contact Person Name is Required');
    }

    if (empty($post['organization'])) {

        array_push($errors, 'organization is Required');
    }

    return $errors;
}


function UpdatePost($post)
{
    $errors = array();


    if (empty($post['title'])) {

        array_push($errors, 'Title is Required');
    }

    if (empty($post['body'])) {

        array_push($errors, 'Body is Required');
    }

    if (empty($post['topic_id'])) {

        array_push($errors, 'Choose a topic');
    }


    return $errors;
}
