<?php

require_once '../vendor/classes/Session.php';
require_once '../vendor/classes/Db.php';

$session -> checkSession();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Main</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md mt-3 d-flex justify-content-between">
                    <div class="logo">
                        <a href="main.php" class="fw-bold">ИС</a>
                    </div>
                    <nav class="nav">
                        <ul class="ul d-flex">
                            <li class="li"><a href="main.php" class="link">Главная</a></li>
                            <li class="li"><a href="zayavleniya.php" class="link">Заявления</a></li>
                            <li class="li"><a href="new_zayavleniya.php" class="link">Оформить заявление</a></li>
                            <li class="li"><a href="../vendor/logout.php" class="link">Выйти</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
