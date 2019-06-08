<?php

require_once "../library/database.php";
require_once 'Task.php';


$dbcon = Database::getDB();
$t = new Task();
$tasks = $t->getAllTask($list_id,$dbcon);

foreach($tasks as $task){
    echo "<li class='list'>".$task->task."</li>".
    "<form action='deletetask.php' method='post'>".
    "<input type='hidden' value='$task->id' name='id'/>".
    "<button type='submit' value='Delete' name='delete' class='close'>&#10005;</button>".
    "</form>";
}
?>