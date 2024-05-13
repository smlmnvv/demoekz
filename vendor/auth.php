<?php

include_once "classes/Db.php";
include_once "funcs/auth_validate.php";

$post = $_POST;

$data = authValidate($post);

$db -> login($data);