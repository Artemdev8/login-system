<?php
require_once "login.classes.php";

class LoginContr extends Login
{
    private $uid;
    private $pwd;

    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser($uid, $pwd)
    {
        if($this->isEmptyInput() == false) {
            header("location: ../index.php?error=emptyinputs");
            exit();
        }

        $this->getUser($uid, $pwd);
    }

    public function isEmptyInput()
    {
        if(empty($this->uid) || empty($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }
}