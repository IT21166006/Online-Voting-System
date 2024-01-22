<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8fedf6cec2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./login.css">
    <title>Log In</title>
</head>

<body>
    <?php require '../feedback/feedback.php' ?>
    <div class="header">
        <p id="hd">BlueTech Online voting System</p>
        <p class="remp">Registration time Remaining: <span id="remtime"></span></p>
        <div class="nav">
            <a href="index.php">Home</a>
        </div>
    </div>
    <div class="log">
        <div class="form1">
            <form name="login-form" action="../auth/login.php" method="POST">
                <div class="ent1">
                    <h2>Login to vote</h2><br>
                    <p>Email*</p>
                    <input type="text" class="ent" placeholder="example@student.moringaschool.com" id="ema" required>
                    <p>Password*</p>
                    <input type="text" class="ent" placeholder="Enter your password" id="pass" required><br>
                    <input type="button" id="btn1" value="Login" onclick="check()"><a href="pass.php" class="passa">Forgot password?</a>
                </div>
            </form>
            <h4>New Voter: <a href="/registration/registration.php"><button id="btn2">Register here</button></a></h4>
        </div>
        <div class="bgimg">
            <img src="./img/log.jpeg" alt="" height="400px" width="350px">
        </div>
    </div>
    <script src="../js/elementselection.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/time.js"></script>
</body>

</html>