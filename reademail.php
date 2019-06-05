<?php

$fp = fopen("user.txt", 'r');
if ($fp)
{
    while (!feof($fp))
    {
        $mytext = fgets($fp, 999);
        echo $mytext."<br />";
    }
}
else echo "Ошибка при открытии файла";
fclose($fp);
