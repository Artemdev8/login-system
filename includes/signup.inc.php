<?php

// Grabbing the data
if(isset($_POST['submit'])) {
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwd_repeat = $_POST["pwd_repeat"];
}

// Connect controller class
require_once '../classes/signup-contr.classes.php';

$signup = new SignupContr($uid, $email, $pwd, $pwd_repeat);
$signup->signupUser();

// Redirect to main page
header("Location: ../signup.php?error=none");