<?php

include_once 'classes/Db.php';
include_once 'funcs/validate.php';

$post = $_POST;

$data = validate($post);

$db -> newStatement($data);