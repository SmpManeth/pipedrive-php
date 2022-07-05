<?php 
include("path.php");
include($ROOT_PATH . "/app/includes/ProjectManagement.php");

$projectManagement = new ProjectManagement();

$status_id = $_GET["status_id"];
$task_id = $_GET["task_id"];

$result = $projectManagement->editTaskStatus($status_id, $task_id);

header('location: ' . $BASE_URL . 'dashboard.php');
