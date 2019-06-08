<?php

session_start();

if(!isset($_SESSION['name'])){
    header("Location: index.php");
}

include "header.php";

?>
        <header id="masterHeader">
            <img id="lbblogo" src="images/LBB_blacklogo.png" alt="Laid Back Bride logo" title="Home"/>
            <ul class="top-nav">
                <li><a href="welcome.php" style="color:#808080;font-weight:700" ><?= $_SESSION['name'] ?></a></li>
                <li><a href="checklist/checklist.php">Check List</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>
        </header>
        <div class="page-wrapper">
            <div class="welcome">
                <img id="welcomelogo" src="images/welcome.png" alt="Welcome" title="Welcome"/>
            </div>
            <div class="account">
            <img id="whiteflowerlogo" src="images/imani-clovis-252739-unsplash.jpg" alt="White flowers image" title="White flowers image"/>
            <!--Photo by Imani Clovis on Unsplash-->
            </div>
            <div class="intro">
                <div class="intro_text1">
                    <p>Thanks for joining us!</p>
                </div>
                <div class="intro_text2">
                    <p>Let's begin with the Checklist. We premade a check list for you. Some of the items may not be necessary, feel free to remove them from the list. You can also customize the list by adding new items.</p>
                    <a href="checklist/checklist.php">/ Start Here</a>
                </div>
                <div class="intro_text3">
                    <p>Another feature we have is the Expense Tracker. Our goal is to help you keep track of your wedding expenses from the beginning so you won't be stress out.</p>
                    <a href="#">/ Start Here</a>
                </div>
            </div>
        </div>

        <?php
            include "footer.php"
        ?>
    </body>
</html>