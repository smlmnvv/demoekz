<?php

include_once "classes/Db.php";
include_once "funcs/reg_validate.php";

$post = $_POST;

$data = validate($post);

$db -> reg($data);