<?php

require_once "../library/database.php";
require_once 'Task.php';

if (isset($_POST['addtask'])){
    $list_id = $_POST['list_id'];
    $task = $_POST['task'];

    $dbcon = Database::getDB();
    $t = new Task();
    $tasks= $t->insertTask($list_id,$task,$dbcon);

    header("Location: checklist.php");
}

?>