<?php

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
