<?php
require "DBController.php";
class ProjectManagement {
   
    
    function getAllStatus() {
        $db_handle = new DBController();
        $query = "SELECT * FROM stages";
        $result = $db_handle->runBaseQuery($query);
        return $result;
    }
    
    function editTaskStatus($status_id, $task_id) {
        $db_handle = new DBController();
        $query = "UPDATE deals SET status_id = ? WHERE id = ?";
        $result = $db_handle->update($query, 'ii', array($status_id, $task_id));
        return $result;
       
    }
}
