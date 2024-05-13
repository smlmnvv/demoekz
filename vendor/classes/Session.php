<?php

namespace Classes\Session;

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function userSession(array $data)
    {
        $_SESSION['user'] = [
            'id' => $data['id'],
            'fio' => $data['fio'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ];
    }

    public function destroySession()
    {
        unset($_SESSION['user']);
        header('Location: ../index.php');
    }

    public function checkSession()
    {
        if(empty($_SESSION['user']))
        {
            header ('Location: ../index.php');
        }
    }
}

$session = new Session();