<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Добро пожаловать на наш сайт!</h1>
    <p>Сегодня: <?php echo date("d.m.Y"); ?></p>
    <p>Текущее время: <?php echo date("H:i:s"); ?></p>
    <p>Мы рады, что вы с нами!</p>
</div>

</body>
</html>
