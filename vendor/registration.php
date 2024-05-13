<?php

include_once "classes/Db.php";
include_once "funcs/validate.php";

$post = $_POST;

$data = regValidate($post);

$db -> reg($data);