<?php

class UserSession
{
    public function __CONSTRUCT(){
        session_start();
    }

    public function setCurrentUser($email){
        $_SESSION['email']=$email;
    }

    public function getCurrentUser(){
        return $_SESSION['email'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}