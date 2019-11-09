<?php
class User
{
    var $userName;
    var $passWord;
    var $fullName;
    function User($userName, $passWord, $fullName)
    {
        $this->userName = $userName;
        $this->passWord = $passWord;
        $this->fullName = $fullName;
    }
    static function authentication($userName, $pw)
    {
        if ($userName == "asd" && $pw == "asd")
            return new User($userName, $pw, "Nguyen Van Asd");
        return null;
    }
}
?>