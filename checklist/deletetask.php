<?php 

require_once "../library/database.php";
require_once 'Task.php';


if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $t = new Task();
    $count = $t->deleteTask($id, $dbcon);

    if($count){
        header("Location: checklist.php");
    }
}

?>