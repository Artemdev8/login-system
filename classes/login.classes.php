<?php
require_once "dbh.classes.php";

class Login extends Dbh
{
    public function getUser($uid, $pwd)
    {
        $stmt = $this->connect()->prepare("SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?");

        if(!$stmt->execute(array($uid, $uid))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmtResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($stmtResult) == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdCheck = password_verify($pwd, $stmtResult[0]['users_pwd']);
        if($pwdCheck == false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        } elseif($pwdCheck == true) {
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?");

            if(!$stmt->execute(array($uid, $uid, $stmtResult[0]['users_pwd']))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(count($user) == 0) {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            session_start();
            $_SESSION['user_id'] = $user[0]['users_id'];
            $_SESSION['user_uid'] = $user[0]['users_uid'];

            $stmt = null;
        }
    }
}
