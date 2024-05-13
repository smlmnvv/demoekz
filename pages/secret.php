<?php

session_start();

if(empty($_SESSION['user']))
{
    header ('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Привет, <?= $_SESSION['user']['fio'] ?> !</h1>
</body>
</html>