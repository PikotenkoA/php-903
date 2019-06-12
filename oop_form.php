<?php


    require 'functions.php';

    spl_autoload_register(function ($className){
        $fileName = __DIR__ . '/classes/' . $className . '.php';
        require $fileName;
    });

    $message = '';
    $form = new Form();
    $form->add (new InputElement('first_name', 'Имя'));
    $form->add (new InputElement('last_name', 'Фамилия'));
    $form->add(new EmailElement('email','Email'));
    $form->add(new PasswordElement('password', 'пароль'));
    $form->add(new ButtonElement('submit', 'Зарегистрировать'));
    $form->handleRequest();

    if ($form->isSumitted()){
        $result = saveUser(
            $form->getValue('first_name'),
            $form->getValue('last_name'),
            $form->getValue('email'),
            $form->getValue('password')
        );

        if ($result) {
            $message = 'Пользователь зарегестрирован';
        }

        else {
            $message = 'Ошибка регистрации пользователя';
        }
    }


    require 'oop_form.tpl.php';



