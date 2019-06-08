<?php
session_start();

if(!isset($_SESSION['name'])){
    header("Location: ../index.php");
}

//require_once "../library/database.php";
//require_once 'Expense.php';

$total = 0;
// $id = 1;

// $dbcon = Database::getDB();
// $exp = new Expense();
// $exp = $exp->getExpenseById($id,$dbcon);

// if(isset($_POST['sum'])){
//     $id= $_POST['id'];
//     $invites = $_POST['invites'];
//     $officiant = $_POST['officiant'];
//     $license = $_POST['license'];
//     $rings = $_POST['rings'];
//     $r_rental = $_POST['r_rental'];
//     $f_rental = $_POST['f_rental'];
//     $cake = $_POST['cake'];
//     $dj = $_POST['dj'];
//     $decor = $_POST['decor'];
//     $florist = $_POST['florist'];
//     $photo = $_POST['photo'];
//     $favor = $_POST['favor'];
//     $wear = $_POST['wear'];

//     $dbcon = Database::getDB();
//     $exp = new Expense();
//     $count = $exp->updateExpense($id,$invites,$officiant,$license,$rings,$r_rental,$f_rental,$dj,$cake,$decor,$florist,$photo,$favor,$wear,$dbcon);
//     if($count){
//         $total = $invites+$officiant+$license+$rings+$r_rental+$f_rental+$dj+$cake+$decor+$florist+$photo+$favor+$wear;
        
//     } else {
//         echo  "Calculate error.";
//     }
// }

include "header.php";

?>
    <body>
        <header id="masterHeader">
            <img id="lbblogo" src="../images/LBB_blacklogo.png" alt="Laid Back Bride logo" title="Home"/>
            <ul class="top-nav">
                <li><a href="../welcome.php" style="color:#808080;font-weight:700" ><?= $_SESSION['name'] ?></a></li>
                <li><a href="../checklist/checklist.php">Check List</a></li>
                <li><a href="expensetracker.php">Expense Tracker</a></li>
                <li><a href="../Logout.php">Logout</a></li>
            </ul>
        </header>

        <div class="page-wrapper">
            <div id="title">
                <img id="expensetrackertitle" src="../images/expensetracker.png" alt="Expense Tracker Title" title="Expense Tracker Title" width="330"/>
                <p id="expensetrackerdes">Our goal is to help you keep track of your wedding expenses from the beginning so you won't be stress out.</p>
            </div>
            <div class="calculator-container">
                <form id="calculator" method="post">
                <input type="hidden" name="id" value="<?= $exp->id; ?>" />
                <div class="list-container">
                <ul>
                    <h2 class="listtitle">Ceremony:</h2>
                    <label class="listitem">Invitation </label><div class="input_sec"><input type="text" name="invites"/></div>
                    <label class="listitem">Officiant </label><div class="input_sec"><input type="text" name="officiant" ></div>
                    <label class="listitem">Marriage license </label><div class="input_sec"><input type="text" name="license" ></div>
                    <label class="listitem">Wedding rings </label><div class="input_sec"><input type="text" name="rings"></div>
                </ul>
                <ul>
                    <h2 class="listtitle">Reception:</h2>
                    <label class="listitem">Site Rental </label><div class="input_sec"><input type="text" name="r_rental" ></div>
                    <label class="listitem">Furniture Rental </label><div class="input_sec"><input type="text" name="f_rental" ></div>
                    <label class="listitem">Food and Drinks </label><div class="input_sec"><input type="text" name="cake" ></div>
                    <label class="listitem">Wedding cake </label><div class="input_sec"><input type="text" name="dj" ></div>
                    <label class="listitem">Entertainment/DJ </label><div class="input_sec"><input type="text" name="decor" ></div>
                    <label class="listitem">Decorations </label><div class="input_sec"><input type="text" name="florist" ></div>
                    <label class="listitem">Florist</label><div class="input_sec"><input type="text" name="r12" ></div>
                    <label class="listitem">Photography </label><div class="input_sec"><input type="text" name="photo" ></div>
                    <label class="listitem">Favor </label><div class="input_sec"><input type="text" name="favor" ></div>
                    <label class="listitem">Bridalwear </label><div class="input_sec"><input type="text" name="wear" ></div>
                </ul>
                </div>
                <div class="result">
                    <button type="text" name="sum" id="con_btn" class="savebtn">Save and Calculate</button><h2>Total: <?php echo $total; ?></h2>
                </div>
                </form>
            </div>
        </div>
        <footer id="footer">
            <p class="copyrights">© All rights reserved by Jennifer Wong</p>
        </footer>
    </body>
</html>