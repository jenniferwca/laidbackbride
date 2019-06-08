<?php

class Expense
{
    public function getExpenseById($id,$dbcon){
        $sql = "SELECT * FROM expensetracker WHERE id = :id ";
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();

        $exp =  $pst->fetch(PDO::FETCH_OBJ);

        return $exp;
    }

    public function updateExpense($id,$invites,$officiant,$license,$rings,$r_rental,$f_rental,$dj,$cake,$decor,$florist,$photo,$favor,$wear,$dbcon){
        $sql = "UPDATE expensetracker
                SET invites = :invites,
                officiant = :officiant,
                license = :license,
                rings = :rings,
                r_rental = :r_rental,
                f_rental = :f_rental,
                dj = :dj,
                cake = :cake,
                decor = :decor,
                florist = :florist,
                photo = :photo,
                favor = :favor,
                wear = :wear
                WHERE id = :id";
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->bindParam(':invites', $invites);
        $pst->bindParam(':officiant', $officiant);
        $pst->bindParam(':license', $license);
        $pst->bindParam(':rings', $rings);
        $pst->bindParam(':r_rental', $r_rental);
        $pst->bindParam(':f_rental', $f_rental);
        $pst->bindParam(':dj', $dj);
        $pst->bindParam(':cake', $cake);
        $pst->bindParam(':decor', $decor);
        $pst->bindParam(':florist', $florist);
        $pst->bindParam(':photo', $photo);
        $pst->bindParam(':favor', $favor);
        $pst->bindParam(':wear', $wear);

        $count = $pst->execute();

        return $count;
    }
}