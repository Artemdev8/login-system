<?php
require_once "signup.classes.php";

class SignupContr extends Signup
{
    private $uid;
    private $email;
    private $pwd;
    private $pwd_repeat;

    public function __construct($uid, $email, $pwd, $pwd_repeat)
    {
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwd_repeat = $pwd_repeat;
    }

    public function signupUser()
    {
        if($this->isEmptyInput() == false) {
            header("Location: ../signup.php?error=emptyinputs");
            exit();
        }

        if($this->isValidEmail() == false) {
            header("Location: ../signup.php?error=invalidemail");
            exit();
        }

        if($this->isValidUid() == false) {
            header("Location: ../signup.php?error=invaliduid");
            exit();
        }

        if($this->passwordsMatch() == false) {
            header("Location: ../signup.php?error=passwordsunmatch");
            exit();
        }

        if($this->isUidTaken() == false) {
            header("Location: ../signup.php?error=uidtaken");
            exit();
        }

        $this->setUser($this->uid, $this->email, $this->pwd);
    }

    private function isEmptyInput()
    {
        if(empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwd_repeat)) {
            return false;
        } else {
            return true;
        }
    }

    private function isValidEmail()
    {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }

    private function isValidUid()
    {
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            return false;
        } else {
            return true;
        }
    }

    private function passwordsMatch()
    {
        if($this->pwd !== $this->pwd_repeat) {
            return false;
        } else {
            return true;
        }
    }

    private function isUidTaken()
    {
        if(!$this->checkUser($this->uid, $this->email)) {
            return false;
        } else {
            return true;
        }
    }
}