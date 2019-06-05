<?php

    function saveUser(string $firstName, string $lastName, string $email, string $password): bool
    {
        $file = fopen('user.txt', 'a');

        if ($file === false) {
            return false;
        }

        $row = sprintf("%s\t%s\t%s\t%s\n", $firstName, $lastName, $email, $password);
        fputs($file, $row);
        fclose($file);

        return true;

    }