<?php
session_start();

if(!isset($_SESSION['name'])){
    header("Location: ../index.php");
}

require_once "../library/database.php";
require_once 'Task.php';

include "../header.php";

?>
    <body>
        <header id="masterHeader">
            <img id="lbblogo" src="../images/LBB_blacklogo.png" alt="Laid Back Bride logo" title="Home"/>
            <ul class="top-nav">
                <li><a href="../welcome.php" style="color:#808080;font-weight:700" ><?= $_SESSION['name'] ?></a></li>
                <li><a href="checklist.php">Check List</a></li>
                <li><a href="../Logout.php">Logout</a></li>
            </ul>
        </header>

        <div class="page-wrapper">
            <div id="title">
                <img id="checklisttitle" src="../images/checklist.png" alt="Check List Title" title="Check List Title" width="270"/>
                <p id="checklistdes">We premade a check list for you. Some of the items may not be necessary, feel free to remove them from the list. You can also customize the list by adding new items.</p>
            </div>
            <div id="checklist-container">
                <div id="ph1type">
                    <h2 class="months">13-18 Months Out</h2>
                    <form method="post" action="addtask.php">
                        <input type='hidden' value='<?= $list_id= 1 ?>' name='list_id'/>
                        <input type="text" name='task' placeholder="Add to your list">
                        <button onclick="newelementph1()" class="addbtn" name="addtask">Add</button>
                    </form>
                </div>
                <ul id="list-ph1">
                    <!--<li class="list">Determine your budget</li>-->
                    <?php $list_id = 1; include 'listtask.php'; ?>
                </ul>
                
                <div id="ph2type">
                    <h2 class="months">10-12 Months Out</h2>
                    <form method="post" action="addtask.php">
                        <input type='hidden' value='<?= $list_id= 2 ?>' name='list_id'/>
                        <input type="text" name='task' placeholder="Add to your list">
                        <button onclick="newelementph1()" class="addbtn" name="addtask">Add</button>
                    </form>
                </div>
                <ul id="list-ph2">
                    <?php $list_id = 2; include 'listtask.php'; ?>
                </ul>
                
                <div id="ph3type">
                    <h2 class="months">7-9 Months Out</h2>
                    <form method="post" action="addtask.php">
                        <input type='hidden' value='<?= $list_id= 3 ?>' name='list_id'/>
                        <input type="text" name='task' placeholder="Add to your list">
                        <button onclick="newelementph1()" class="addbtn" name="addtask">Add</button>
                    </form>
                </div>
                <ul id="list-ph3">
                    <?php $list_id = 3; include 'listtask.php'; ?>
                </ul>
                
                <div id="ph4type">
                    <h2 class="months">4-6 Months Out</h2>
                    <form method="post" action="addtask.php">
                        <input type='hidden' value='<?= $list_id= 4 ?>' name='list_id'/>
                        <input type="text" name='task' placeholder="Add to your list">
                        <button onclick="newelementph1()" class="addbtn" name="addtask">Add</button>
                    </form>
                </div>
                <ul id="list-ph4">
                    <?php $list_id = 4; include 'listtask.php'; ?>
                </ul>
                
                <div id="ph5type">
                    <h2 class="months">1-3 Months Out</h2>
                    <form method="post" action="addtask.php">
                        <input type='hidden' value='<?= $list_id= 5 ?>' name='list_id'/>
                        <input type="text" name='task' placeholder="Add to your list">
                        <button onclick="newelementph1()" class="addbtn" name="addtask">Add</button>
                    </form>
                </div>
                <ul id="list-ph5">
                    <?php $list_id = 5; include 'listtask.php'; ?>
                </ul>
                
                <div id="ph6type">
                    <h2 class="months">Final Week</h2>
                    <form method="post" action="addtask.php">
                        <input type='hidden' value='<?= $list_id= 6 ?>' name='list_id'/>
                        <input type="text" name='task' placeholder="Add to your list">
                        <button onclick="newelementph1()" class="addbtn" name="addtask">Add</button>
                    </form>
                </div>
                <ul id="list-ph6">
                    <?php $list_id = 6; include 'listtask.php'; ?>
                </ul>
                
            </div>
        </div>
        <script src="js/checklist.js" type="text/javascript"></script>
        <footer id="footer">
            <p class="copyrights">© All rights reserved by Jennifer Wong</p>
        </footer>
    </body>
</html>