<?php

function authValidate(array $data)
{
    foreach($data as $v)
    {
        if(empty($v))
        {
            die("Пожалуйста, заполните все поля");
        }
    }

    foreach($data as $k => $v)
    {
        $data[$k] = trim($v);
        $data[$k] = strip_tags($v);
        $data[$k] = htmlspecialchars($v);
    }

    return $data;
}