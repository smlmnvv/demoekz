<?php

require_once 'Session.php';

$data = require '../config/db_data.php';

class Db extends \Classes\Session\Session
{
    private $connect;
    private $stmt;

    public function __construct(array $data)
    {
        $dsn = "mysql:host={$data['host']};dbname={$data['dbname']}";
        try
        {
            $this -> connect = new PDO($dsn, $data['user'], $data['pass']);
        }
        catch (PDOException $e)
        {
            die("Ошибка подключения к базе данных: {$e -> getMessage()}");
        }
    }

    public function reg(array $data)
    {
        $this -> stmt = $this -> connect -> prepare("INSERT INTO `users` (fio, phone, email, login, password) VALUES
        (?, ?, ?, ?, ?)");
        if($this -> stmt -> execute([
            $data['fio'],
            $data['phone'],
            $data['email'],
            $data['login'],
            $data['password'],
        ])){
            header('Location: ../index.php');
        };
    }

    public function login(array $data)
    {
        $this -> stmt = $this -> connect -> prepare("SELECT * FROM `users` WHERE login = ?");
        $this -> stmt -> execute([$data['login']]);
        $user = $this -> stmt -> fetch();

        if($user == 0)
        {
            die('Такой пользователь не зарегестрирован');
        }

        if($user['password'] == password_verify($data['password'], $user['password']))
        {
            $this -> userSession($user);
            header ('Location: ../pages/main.php');
        }
        else
        {
            die('Вы ввели неверный логин или пароль');
        }
    }

    public function newStatement(array $data)
    {
        $this -> stmt = $this -> connect -> prepare ("INSERT INTO `statements` (userId, carNumber, description) VALUES
        (?, ?, ?)");
        if($this -> stmt -> execute([
            $data['id'],
            $data['number'],
            $data['description'],
        ]))
        {
            header('Location: ../pages/main.php');
        }
    }

    public function findStatements(int $userId)
    {
        $this -> stmt = $this -> connect -> prepare ("SELECT * FROM `statements` WHERE `userId` = ?");
        $this -> stmt -> execute([$userId]);
        $result = $this -> stmt -> fetchAll();
        return $result;
    }
}

$db = new Db($data);