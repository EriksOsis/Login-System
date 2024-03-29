<?php

class LoginContr extends Login
{
    private string $uid;
    private string $pwd;


    public function __construct(string $uid, string $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;

    }

    public function loginUser() {
        if($this->emptyInput() == false) {
            //echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }


        $this->getUser($this->uid, $this->pwd);
    }

    private function emptyInput()
    {
        $result = true;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}