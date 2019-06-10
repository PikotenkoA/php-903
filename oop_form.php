<?php

    spl_autoload_register(function ($className){
        $fileName = __DIR__ . '/classes/' . $className . '.php';
        require $fileName;
    });


    $form = new Form();
    $form->add (new InputElement('first_name', 'Имя'));
    $form->add (new InputElement('last_name', 'Фамилия'));

    require 'oop_form.tpl.php';



