<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <h2>Регистрация</h2>
    <form action="register.php" method="post">
        <label for="username">Имя пользователя:</label>
        <input type="text" name="username" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Зарегистрироваться">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'config.php';

        $username = pg_escape_string($conn, $_POST['username']);
        $email = pg_escape_string($conn, $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Хеширование пароля

        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        $result = pg_query($conn, $query);

        if ($result) {
            echo "Регистрация прошла успешно!";
        } else {
            echo "Ошибка регистрации: " . pg_last_error($conn);
        }

        pg_close($conn);
    }
    ?>
</body>
</html>