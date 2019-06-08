<?php

require_once 'library/function.php';

$logerror = "";
$error = "";
$name = "";
$email = "";
$pass = "";
$repass = "";
session_start();

if(isset($_POST["register"]))
{
    $name = filter_input(INPUT_POST,'name');
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $pass = filter_input(INPUT_POST,'pass');
    $repass = filter_input(INPUT_POST,'repass');
    $error = validateForm($name,$email,$pass,$repass,$error);
    if (empty($error)){
        $error = insertForm($name,$email,$pass,$error);
    }
}

if(isset($_POST["login"]))
{
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $pass = filter_input(INPUT_POST,'pass');

    $logerror = validateLoginForm($email,$pass,$logerror);
    if (empty($logerror)){
        $logerror = validateLoginForm($email,$pass,$logerror);
    }
}

include "header.php";

?>
    <body>
        <header id="masterHeader">
            <img id="lbblogo" src="images/LBB_blacklogo.png" alt="Laid Back Bride logo" title="Home"/>
            <ul class="top-nav">
                <li><a href="about.php">About</a></li>
                <li><a href="index.php">Back</a></li>
            </ul>
        </header>
        <section class="login_container">
            <div class="login_form">
                <img id="loginlogo" src="images/login.png" alt="Login" title="Login"/>
                <p class="error"><?= $logerror ?><p>
                <form method="post">
                    <p class="warning">* Please register if you have not registered yet.</p>
                    <label>Email:</label>
                    <input type="text" name="email" class="logintext" placeholder="Enter Email"/><br/>
                    <label>Password:</label>
                    <input type="password" name="pass" class="logintext" placeholder="Enter password"/><br/>
                    <input type="submit" name="login" value="Login"/><br/>
                </form>
            </div>

            <div class="register_form">
                <img id="registerlogo" src="images/register.png" alt="Register" title="Register"/>
                <p class="error"><?= $error ?><p>
                <form method="post">
                    <label>Username:</label>
                    <input type="text" name="name" class="logintext" placeholder="Enter username"/><br/>
                    <label>Email:</label>
                    <input type="text" name="email" class="logintext" placeholder="Enter email"/><br/>
                    <label>Password:</label>
                    <input type="password" name="pass" class="logintext" placeholder="Enter password"/><br/>
                    <label>Re-enter Password:</label>
                    <input type="password" name="repass" class="logintext" placeholder="Re-enter password"/><br/>
                    <input type="submit" name="register" value="Register"/><br/>
                </form>
            </div>
        </section>
        <?php
            include "footer.php"
        ?>
    </body>
</html>