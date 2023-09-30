<?php

// Grabbing the data
if(isset($_POST['submit'])) {
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
}

// Connect controller class
require_once '../classes/login-contr.classes.php';

$login = new LoginContr($uid, $pwd);
$login->loginUser($uid, $pwd);

// Redirect to main page
header("Location: ../user-page.php?error=none");