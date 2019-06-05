<?php

    require 'functions.php';


    $firstName = '';
    $lastName = '';
    $email = '';
    $password = '';
    $message = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $parametrs = ['firstName', 'lastName', 'email', 'password'];

        foreach ($parametrs as $parametr) {
            if (empty($_POST[$parametr])) {
                die('Не найден элемент' . $parametr);
            }
        }

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (saveUser($firstName, $lastName, $email, $password)) {
            $message = 'Пользователь зерегистрирован';
        } else {
           $message = 'ошибка регистрации пользователя';
        }

    }

    include 'form.tpl.php';
