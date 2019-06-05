<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
<?php if ($message): ?>
    <p><?= $message ?></p>
<?php endif ?>

    <form method="post" action="form.php">
        <label for="firstName">Имя</label>
        <input type="text" id="firstName" name="firstName">
        <br>
        <label for="lastName">Фамилия</label>
        <input type="text" id="lastName" name="lastName">
        <br>
        <label for="email">email</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password">
        <br>

        <button type="submit">Зарегистрироваться</button>

    </form>
</body>
</html>