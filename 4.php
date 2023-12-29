<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Задание №4</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    </head>
    <main>
        <body>
            <?php
                $logins = array(
                    "1"  => array(true, "Крупнов Никита"),
                    "2" => array(true, "Иван Иванович"),
                    "3" => array(true, "Сергей Сергеевич"),
                    "4" => array(true, "Антон Антонович"),
                );
                if (!empty($logins[$_POST['login']][0])) {echo "<h2>Здравствуйте, ".$logins[$_POST['login']][1]."!</h2>";}
                else {echo "<h2>Вы не зарегистрированный пользователь!</h2>";}
            ?>
        </body>
    </main>
</html>
