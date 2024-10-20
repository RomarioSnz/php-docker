<?php
$host = "db";  // Если используете Docker Compose, имя сервиса базы данных
$port = "5432";
$dbname = "your_database_name";
$user = "postgres";
$password = "postgres";

// Подключение к базе данных PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Ошибка подключения к базе данных: " . pg_last_error());
}
?>