<?php 

function regValidate(array $data)
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

    
    if(filter_var($data['email'], FILTER_VALIDATE_EMAIL) == false)
    {
        die('Ошибка: вы ввели некорректный email.');
    }

    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    if($data['password'] != password_verify($data['password_repeat'], $data['password']))
    {
        die('Ошибка: вы ввели разные пароли');
    }

    if(strlen($data['password']) < 5)
    {
        die('Вы ввели слишком короткий пароль');
    }

    return $data;

}

function validate(array $data)
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