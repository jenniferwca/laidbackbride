<?php

class Task
{
    public function getAllTask($list_id,$dbcon)
    {
        $sql = "SELECT * FROM tasks WHERE list_id =:list_id";
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':list_id', $list_id);
        $pst->execute();
        $task = $pst->fetchAll(PDO::FETCH_OBJ);

        return $task;
    }

    public function insertTask($list_id,$task,$dbcon)
    {
        $sql = "INSERT INTO tasks(list_id,task) 
        values(:list_id,:task)";
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':list_id', $list_id);
        $pst->bindParam(':task', $task);
        $count = $pst->execute();

        if($count){
            header("location: checklist.php");
        }else{
            $message = 'Failed to add task';
        }
        return $message;
    }

    public function deleteTask($id, $dbcon){
        $sql = "DELETE FROM tasks WHERE id = :id";
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();

        return $count;
    }
}
