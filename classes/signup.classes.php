<?php
require_once "dbh.classes.php";

class Signup extends Dbh
{
    protected function checkUser($uid, $email)
    {
        $stmt = $this->connect()->prepare("SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?");

        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $resultCheck = false;
        $signupData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($signupData) > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        $stmt = null;
        return $resultCheck;
    }

    protected function setUser($uid, $email, $pwd)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_email, users_pwd) VALUES (?, ?, ?)');

        $pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($uid, $email, $pwdHashed))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}